<?php

namespace Kordy\Ticketit\Tests;

use AuzoToolsPermissionRegistrar;
use Kordy\Ticketit\Policies\TicketPolicies;
use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;

class TicketsAuthorizationTest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;

    protected $policies = [
        'user'          => 'Kordy\Ticketit\Policies\TicketPolicies@isUser',
        'owner'         => 'Kordy\Ticketit\Policies\TicketPolicies@isOwner',
        'agent'         => 'Kordy\Ticketit\Policies\TicketPolicies@isAgent',
        'assigned'      => 'Kordy\Ticketit\Policies\TicketPolicies@isAssigned',
        'assigned_team' => 'Kordy\Ticketit\Policies\TicketPolicies@isAssignedTeam',
        'category_team' => 'Kordy\Ticketit\Policies\TicketPolicies@isCategoryTeam',
        'administrator' => 'Kordy\Ticketit\Policies\TicketPolicies@isAdministrator',
    ];

    /** @test */
    public function ticketit_policies_are_functional()
    {
        $policies = new TicketPolicies();

        $cat1 = $this->createCategory();
        $cat2 = $this->createCategory();

        $user1 = $this->createUser();
        $user2 = $this->createUser();

        $this->assertTrue($policies->isUser($user1));
        $this->assertFalse($policies->isAgent($user1));
        $this->assertFalse($policies->isAdministrator($user1));
        $this->assertTrue($policies->isUser($user2));
        $this->assertFalse($policies->isAgent($user2));
        $this->assertFalse($policies->isAdministrator($user2));

        $agent1 = $this->createAgent();
        $this->assertTrue($policies->isAgent($agent1));
        $this->assertFalse($policies->isAdministrator($agent1));
        $agent1->addToCategory($cat1);

        $agent2 = $this->createAgent();
        $this->assertTrue($policies->isAgent($agent2));
        $this->assertFalse($policies->isAdministrator($agent2));
        $agent2->addToCategory($cat1);

        $agent3 = $this->createAgent();
        $this->assertTrue($policies->isAgent($agent3));
        $this->assertFalse($policies->isAdministrator($agent3));
        $agent3->addToCategory($cat2);

        $admin = $this->createAdmin();
        $this->assertTrue($policies->isAdministrator($admin));

        $cat1_id = $cat1->getKey();
        $agent1_id = $agent1->getKey();
        $ticket = $this->createTicket([
            'category_id' => $cat1_id,
            'agent_id'    => $agent1_id,
            'user'        => $user1,
        ]);

        $this->assertTrue($policies->isOwner($user1, null, $ticket));
        $this->assertFalse($policies->isOwner($user2, null, $ticket));
        $this->assertFalse($policies->isOwner($agent1, null, $ticket));
        $this->assertFalse($policies->isOwner($admin, null, $ticket));

        $this->assertTrue($policies->isAssigned($agent1, null, $ticket));
        $this->assertFalse($policies->isAssigned($user1, null, $ticket));
        $this->assertFalse($policies->isAssigned($agent2, null, $ticket));
        $this->assertFalse($policies->isAssigned($admin, null, $ticket));

        $this->assertTrue($policies->isAssignedTeam($agent2, null, $ticket));
        $this->assertFalse($policies->isAssignedTeam($user1, null, $ticket));
        $this->assertFalse($policies->isAssignedTeam($agent3, null, $ticket));
        $this->assertFalse($policies->isAssignedTeam($admin, null, $ticket));
    }

    /** @test */
    public function ticketit_auzo_tools_authorization()
    {
        $cat1 = $this->createCategory();
        $cat2 = $this->createCategory();

        $user1 = $this->createUser();
        $user2 = $this->createUser();

        $agent1 = $this->createAgent();
        $agent1->addToCategory($cat1);

        $agent2 = $this->createAgent();
        $agent2->addToCategory($cat1);

        $agent3 = $this->createAgent();
        $agent3->addToCategory($cat2);

        $admin = $this->createAdmin();

        $cat1_id = $cat1->getKey();
        $agent1_id = $agent1->getKey();
        $ticket = $this->createTicket([
            'category_id' => $cat1_id,
            'agent_id'    => $agent1_id,
            'user'        => $user1,
        ]);

        // same as $abilities_policies = config('ticketit.acl')
        $abilities_policies = [
            'before' => [
                $this->policies['administrator'],
            ],

            'abilities' => [
                // Show ticket to its owner or to the assigned agent,
                'ticket.show' => [
                    $this->policies['owner'],
                    ['or' => $this->policies['assigned']],
                    ['or' => $this->policies['assigned_team']],
                ],
                // Only the assigned agent can update the ticket
                'ticket.update' => [
                    $this->policies['assigned'],
                ],
                // To list all category tickets, it has to be agent and to be a member of this category team
                'ticket.index.category' => [
                    $this->policies['agent'],
                    $this->policies['category_team'],
                ],
            ],
        ];

        // Load abilities to Laravel Gate
        AuzoToolsPermissionRegistrar::registerPermissions($abilities_policies);

        $this->assertTrue($user1->can('ticket.show', $ticket));
        $this->assertTrue($agent1->can('ticket.show', $ticket));
        $this->assertTrue($admin->can('ticket.show', $ticket));
        $this->assertTrue($user2->cannot('ticket.show', $ticket));
        $this->assertTrue($agent2->can('ticket.show', $ticket));
        $this->assertTrue($agent3->cannot('ticket.show', $ticket));

        $this->assertFalse($user1->can('ticket.update', $ticket));
        $this->assertTrue($agent1->can('ticket.update', $ticket));
        $this->assertTrue($admin->can('ticket.update', $ticket));
        $this->assertTrue($user2->cannot('ticket.update', $ticket));
        $this->assertFalse($agent2->can('ticket.update', $ticket));

        $this->assertTrue($agent1->can('ticket.index.category', $cat1));
        $this->assertTrue($admin->can('ticket.index.category', $cat1));
        $this->assertTrue($agent2->can('ticket.index.category', $cat1));
        $this->assertFalse($user1->can('ticket.index.category', $cat1));
        $this->assertFalse($agent3->can('ticket.index.category', $cat1));
    }
}

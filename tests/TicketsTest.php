<?php

namespace Kordy\Ticketit\Test;

use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;

class TicketsTest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;

    protected $user_model;
    protected $faker;
    
    public function setUp()
    {
        parent::setUp();

        $this->user_model = config('ticketit.core.user_model');
        $this->faker = $faker = \Faker\Factory::create();
    }

    function test_auth_middleware_is_enforced()
    {
        // not signed in visitor trying to access ticket index page
        try {
            $this->visit(route('ticketit.tickets.index'));
        } catch (\Exception $e) {
            $this->assertContains ("Received status code [403]",$e->getMessage());
        }

        // while a register user is allowed
        $user = $this->createUser();

        $this->actingAs($user)
            ->visit(route('ticketit.tickets.open'))
            ->see('open tickets');
    }

    function test_edit_middleware_is_enforced()
    {
        $user = $this->createUser();
        $agent = $this->createAgent();
        $admin = $this->createAdmin();

        $ticket = $this->createTicket(['user' => $user, 'agent_id' => $agent->id]);

        // agent can access the edit page
        $this->actingAs($agent)
            ->visit(route('ticketit.edit.ticket', $ticket->id))
            ->see('edit ticket');
        // admin can access the edit page
        $this->actingAs($admin)
            ->visit(route('ticketit.edit.ticket', $ticket->id))
            ->see('edit ticket');

        // user can not access the edit page
        try {
            $this->actingAs($user)
                ->visit(route('ticketit.edit.ticket', $ticket->id))
                ->see('edit ticket');
        } catch (\Exception $e) {
            $this->assertContains ("Received status code [403]",$e->getMessage());
        }
    }
}
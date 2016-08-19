<?php

namespace Kordy\Ticketit\Tests;

use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;
use TicketitHelpers;

class RoutesAPITest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;

    /**
     * Index user owned tickets.
     *
     * @test
     */
    public function ticketit_index_own()
    {
        $url = TicketitHelpers::getApiRoutePath('tickets.index.own');

        $userOne = $this->createUser();

        $ticketOne = $this->createTicket(['user' => $userOne]);
        $ticketTwo = $this->createTicket(['user' => $userOne]);
        $ticketThree = $this->createTicket();

        $this->actingAs($userOne)
            ->get($url)
            ->seeJson(
                ['subject' => $ticketOne->subject]
            )
            ->seeJson(
                ['subject' => $ticketTwo->subject]
            )
            ->dontSeeJson(
                ['subject' => $ticketThree->subject]
            );
    }

    /**
     * Index user owned tickets with GET filters.
     *
     * @test
     */
    public function ticketit_index_own_with_get_filters()
    {
        $url = TicketitHelpers::getApiRoutePath('tickets.index.own');

        $userOne = $this->createUser();

        $ticketOne = $this->createTicket(['user' => $userOne]);
        $ticketTwo = $this->createTicket(['user' => $userOne]);

        // filter by subject
        $subject = explode(' ', trim($ticketOne->subject));
        $this->actingAs($userOne)
            ->get($url.'?subject='.implode(' ', [$subject[0], $subject[1], $subject[2]]))
            ->seeJson(
                ['subject' => $ticketOne->subject]
            )
            ->dontSeeJson(
                ['subject' => $ticketTwo->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Index agent assigned tickets with GET filters.
     *
     * @test
     */
    public function ticketit_index_assigned_with_get_filters()
    {
        $url = TicketitHelpers::getApiRoutePath('tickets.index.assigned');

        $agentOne = $this->createAgent();

        $ticketOne = $this->createTicket(['agent_id' => $agentOne->getKey()]);
        $ticketTwo = $this->createTicket(['agent_id' => $agentOne->getKey()]);
        $ticketThree = $this->createTicket();

        // filter by subject
        $subject = explode(' ', trim($ticketOne->subject));
        $this->actingAs($agentOne)
            ->get($url.'?subject='.implode(' ', [$subject[0], $subject[1], $subject[2]]))
            ->seeJson(
                ['subject' => $ticketOne->subject]
            )
            ->dontSeeJson(
                ['subject' => $ticketTwo->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Index tickets in specific category with GET filters.
     *
     * @test
     */
    public function ticketit_index_category_with_get_filters()
    {
        $categoryOne = $this->createCategory();

        $url = TicketitHelpers::getApiRoutePath('tickets.index.category', $categoryOne->getKey());

        $agentOne = $this->createAgent();
        $agentTwo = $this->createAgent();

        $categoryOne->addAgent($agentOne);

        $ticketOne = $this->createTicket(['category_id' => $categoryOne->getKey()]);
        $ticketTwo = $this->createTicket(['category_id' => $categoryOne->getKey()]);
        $ticketThree = $this->createTicket();

        // filter by subject
        $subject = explode(' ', trim($ticketOne->subject));
        $this->actingAs($agentOne)
            ->get($url.'?subject='.implode(' ', [$subject[0], $subject[1], $subject[2]]))
            ->seeJson(
                ['subject' => $ticketOne->subject]
            )
            ->dontSeeJson(
                ['subject' => $ticketTwo->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Index all tickets.
     *
     * @test
     */
    public function ticketit_index_all_with_get_filters()
    {
        $url = TicketitHelpers::getApiRoutePath('tickets.index.all');

        $ticketOne = $this->createTicket();
        $ticketTwo = $this->createTicket();
        $ticketThree = $this->createTicket();

        $admin = $this->createAdmin();

        $this->actingAs($admin)
            ->get($url)
            ->seeJson(
                ['subject' => $ticketOne->subject]
            )
            ->seeJson(
                ['subject' => $ticketTwo->subject]
            )
            ->seeJson(
                ['subject' => $ticketThree->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Show a single ticket.
     *
     * @test
     */
    public function ticketit_owner_assigned_admin_show_single_ticket()
    {
        $categoryOne = $this->createCategory();

        $userOne = $this->createUser();
        $userTwo = $this->createUser();

        $agentOne = $this->createAgent();
        $agentTwo = $this->createAgent();
        $agentThree = $this->createAgent();

        $admin = $this->createAdmin();

        $categoryOne->addAgent([$agentOne->getKey(), $agentTwo->getKey()]); // assigned team

        $ticketOne = $this->createTicket([
            'agent_id' => $agentOne->getKey(),
            'category_id' => $categoryOne->getKey(),
            'user' => $userOne
        ]);

        $url = TicketitHelpers::getApiRoutePath('ticket.show', $ticketOne->getKey());

        // Allowed access
        $this->actingAs($userOne)->get($url)->seeJson(['subject' => $ticketOne->subject]);
        $this->actingAs($agentOne)->get($url)->seeJson(['subject' => $ticketOne->subject]);
        $this->actingAs($agentTwo)->get($url)->seeJson(['subject' => $ticketOne->subject]);
        $this->actingAs($admin)->get($url)->seeJson(['subject' => $ticketOne->subject]);

        // Not allowed access
        $this->actingAs($userTwo)->get($url)->seeStatusCode(403);
        $this->actingAs($agentThree)->get($url)->seeStatusCode(403);
    }
}

<?php

namespace Kordy\Ticketit\Tests;

use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;

class RoutesAPITest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;

    protected $routes = [];

    public function setUp()
    {
        parent::setUp();

        // get all configured routes in config/ticketit/routes.php
        $this->routes = config('ticketit.routes');
    }

    /**
     * Index user owned tickets
     *
     * @test
     */
    public function ticketit_index_own()
    {
        $routeName = $this->routes['api.ticketit.index.own']['parameters']['as'];
        $url = route($routeName);

        $userOne = $this->createUser();

        $ticketOne = $this->createTicket(['user' => $userOne]);
        $ticketTwo = $this->createTicket(['user' => $userOne]);
        $ticketThree = $this->createTicket();

        $this->actingAs($userOne)
            ->get($url)
            ->seeJson(
                ["subject" => $ticketOne->subject]
            )
            ->seeJson(
                ["subject" => $ticketTwo->subject]
            )
            ->dontSeeJson(
                ["subject" => $ticketThree->subject]
            );
    }

    /**
     * Index user owned tickets with GET filters
     *
     * @test
     */
    public function ticketit_index_own_with_get_filters()
    {
        $routeName = $this->routes['api.ticketit.index.own']['parameters']['as'];
        $url = route($routeName);

        $userOne = $this->createUser();

        $ticketOne = $this->createTicket(['user' => $userOne]);
        $ticketTwo = $this->createTicket(['user' => $userOne]);

        // filter by subject
        $subject = explode(' ', trim($ticketOne->subject));
        $this->actingAs($userOne)
            ->get($url . '?subject=' . implode(' ', [$subject[0], $subject[1], $subject[2]]))
            ->seeJson(
                ["subject" => $ticketOne->subject]
            )
            ->dontSeeJson(
                ["subject" => $ticketTwo->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Index agent assigned tickets with GET filters
     *
     * @test
     */
    public function ticketit_index_assigned_with_get_filters()
    {
        $routeName = $this->routes['api.ticketit.index.assigned']['parameters']['as'];
        $url = route($routeName);

        $agentOne = $this->createAgent();

        $ticketOne = $this->createTicket(['agent_id' => $agentOne->getKey()]);
        $ticketTwo = $this->createTicket(['agent_id' => $agentOne->getKey()]);
        $ticketThree = $this->createTicket();

        // filter by subject
        $subject = explode(' ', trim($ticketOne->subject));
        $this->actingAs($agentOne)
            ->get($url . '?subject=' . implode(' ', [$subject[0], $subject[1], $subject[2]]))
            ->seeJson(
                ["subject" => $ticketOne->subject]
            )
            ->dontSeeJson(
                ["subject" => $ticketTwo->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Index tickets in specific category with GET filters
     *
     * @test
     */
    public function ticketit_index_category_with_get_filters()
    {
        $categoryOne = $this->createCategory();

        $routeName = $this->routes['api.ticketit.index.category']['parameters']['as'];
        $url = route($routeName, $categoryOne->getKey());

        $agentOne = $this->createAgent();
        $agentTwo = $this->createAgent();

        $categoryOne->addAgent($agentOne);

        $ticketOne = $this->createTicket(['category_id' => $categoryOne->getKey()]);
        $ticketTwo = $this->createTicket(['category_id' => $categoryOne->getKey()]);
        $ticketThree = $this->createTicket();

        // filter by subject
        $subject = explode(' ', trim($ticketOne->subject));
        $this->actingAs($agentOne)
            ->get($url . '?subject=' . implode(' ', [$subject[0], $subject[1], $subject[2]]))
            ->seeJson(
                ["subject" => $ticketOne->subject]
            )
            ->dontSeeJson(
                ["subject" => $ticketTwo->subject]
            );
        // Todo test remaining filters
    }

    /**
     * Index all tickets
     *
     * @test
     */
    public function ticketit_index_all_with_get_filters()
    {
        $routeName = $this->routes['api.ticketit.index.all']['parameters']['as'];
        $url = route($routeName);

        $ticketOne = $this->createTicket();
        $ticketTwo = $this->createTicket();
        $ticketThree = $this->createTicket();

        $admin = $this->createAdmin();

        $this->actingAs($admin)
            ->get($url)
            ->seeJson(
                ["subject" => $ticketOne->subject]
            )
            ->seeJson(
                ["subject" => $ticketTwo->subject]
            )
            ->seeJson(
                ["subject" => $ticketThree->subject]
            );
        // Todo test remaining filters
    }
}

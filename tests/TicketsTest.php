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

    function test_can_see_index_page_insure_routes_config_works()
    {
        // auth middleware is enforced
        $this->visit(route('ticketit.index'))
            ->seePageIs(\URL::to('login'));

        $user = $this->createUser();

        $this->actingAs($user)
            ->visit(route('ticketit.index'))
            ->see('tickets index');
    }
}
<?php

namespace Kordy\Ticketit\Tests;

use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;
use URL;

class TicketsTest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;

    /** @test */
    public function can_see_index_page_insure_routes_config_works()
    {
        // auth middleware is enforced
        $this->get(route('ticketit.index'))
            ->assertRedirectedTo(URL::to('auth/login'));

        $user = $this->createUser();
        $this->actingAs($user)
            ->visit(route('ticketit.index'))
            ->see('tickets index');
    }
}

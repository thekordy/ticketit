<?php

use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;

class TicketsTest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;

    /** @test */
    public function can_see_index_page_insure_routes_config_works()
    {
        // auth middleware is enforced
        $this->get(route('ticketit.index'))
            ->assertRedirectedTo(\URL::to('login'));

        $user = $this->createUser();
        $this->actingAs($user)
            ->visit(route('ticketit.index'))
            ->see('tickets index');
    }
}

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
    public function user_can_get_index_of_own_tickets()
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
    public function user_can_get_index_of_own_tickets_with_get_filters()
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
    public function agent_can_get_index_of_assigned_tickets_with_get_filters()
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
    public function agent_can_get_index_of_assigned_category_with_get_filters()
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
    public function admin_can_index_all_tickets_with_get_filters()
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
    public function owner_assigned_admin_can_show_single_ticket()
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
            'agent_id'    => $agentOne->getKey(),
            'category_id' => $categoryOne->getKey(),
            'user'        => $userOne,
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

    /**
     * Auto assign agents to new tickets.
     *
     * @test
     */
    public function auto_assign_agents_to_new_tickets()
    {
        \Session::start(); // for csrf_token to work

        $url = TicketitHelpers::getApiRoutePath('ticket.store');

        $category = $this->createCategory();
        $this->createStatus();
        $this->createPriority();
        $user = $this->createUser();
        $agentOne = $this->createAgent();
        $agentTwo = $this->createAgent();
        $agentThree = $this->createAgent();

        $category->addAgent([$agentOne->getKey(), $agentTwo->getKey(), $agentThree->getKey()]);

        $a = 5;
        $b = 3;
        $c = 1;
        while ($a > 0) {
            $this->createTicket([
                'agent_id'    => $agentTwo->getKey(),
                'category_id' => $category->getKey(),
            ]);
            // 5 tickets for agentThree outside categoryOne
            $this->createTicket(['agent_id' => $agentThree->getKey()]);
            $a--;
        }
        while ($b > 0) {
            $this->createTicket([
                'agent_id'    => $agentOne->getKey(),
                'category_id' => $category->getKey(),
            ]);
            // 3 tickets for agentThree outside categoryOne
            $this->createTicket(['agent_id' => $agentThree->getKey()]);
            $b--;
        }
        while ($c > 0) {
            // Only 1 ticket for agentThree inside CategoryOne
            $this->createTicket([
                'agent_id'    => $agentThree->getKey(),
                'category_id' => $category->getKey(),
            ]);
            $c--;
        }

        $ticketData = [
            'subject'     => $this->faker->sentence(),
            'content'     => $this->faker->paragraph(),
            'category_id' => $category->getKey(),
            '_token'      => csrf_token(),
        ];
        // auto assign to the least by counting all agent's tickets
        $this->actingAs($user)
            ->json('POST', $url, $ticketData)
            ->seeStatusCode(200);

        $last_ticket_url = TicketitHelpers::getApiRoutePath('ticket.show', 18);

        $this->actingAs($user)
            ->json('GET', $last_ticket_url)
            ->seeJson([
                'agent_info' => ['name' => $agentOne->name]  // agentOne least agent in total tickets count
            ]);

        // auto assign to the least by counting only category tickets
        $category->auto_assign = 'least_local';
        $category->save();

        $this->actingAs($user)
            ->json('POST', $url, $ticketData)
            ->seeStatusCode(200);

        $last_ticket_url = TicketitHelpers::getApiRoutePath('ticket.show', 19);

        $this->actingAs($user)
            ->json('Get', $last_ticket_url)
            ->seeJson([
                'agent_info' => ['name' => $agentThree->name] // agentThree least agent in categoryOne with least_local tickets count
            ]);
    }

    /**
     * Create a single ticket.
     *
     * @test
     */
    public function create_a_single_ticket_by_logged_in_user()
    {
        \Session::start(); // for csrf_token to work

        $url = TicketitHelpers::getApiRoutePath('ticket.store');

        $category = $this->createCategory();
        $this->createStatus();
        $this->createPriority();
        $user = $this->createUser();
        $agent = $this->createAgent();
        $category->addAgent($agent->getKey());

        // validation rules can be found at config/ticketit/validation.php

        // missing subject, content, priority, and others are wrong data
        $ticketInvalidData = [
            'category_id' => 2, // not existed category
            'status_id'   => 3, // not authorized and not existed status
            'agent_id'    => 4, // not authorized and not existed agent
            '_token'      => csrf_token(),
        ];

        $this->actingAs($user)
            ->json('POST', $url, $ticketInvalidData)
            ->seeStatusCode(422);

        $ticketValidData = [
            'subject'     => $this->faker->sentence(),
            'content'     => $this->faker->paragraph(),
            'category_id' => $category->getKey(),
            '_token'      => csrf_token(),
        ];

        $this->actingAs($user)
            ->json('POST', $url, $ticketValidData)
            ->seeStatusCode(200);
    }

    /**
     * Create a single ticket by a user for another user.
     *
     * @test
     */
    public function create_a_single_ticket_for_another_user()
    {
        \Session::start(); // for csrf_token to work

        $url = TicketitHelpers::getApiRoutePath('ticket.store');

        $category = $this->createCategory();
        $status = $this->createStatus();
        $priority = $this->createPriority();
        $user = $this->createUser();
        $agent = $this->createAgent();
        $agent->addToCategory($category->getKey());

        // validation rules can be found at config/ticketit/validation.php

        // missing subject, content, priority, and others are wrong data
        $ticketInvalidData = [
            'user_id'       => $agent->getKey(),       // unauthorized trying to set the user_id
            'user_class'    => 'user',  // unauthorized trying to set the user_class
            'subject'       => $this->faker->sentence(),
            'content'       => $this->faker->paragraph(),
            'category_id'   => $category->getKey(),
            'status_id'     => $status->getKey(),  // unauthorized trying to set the status_id
            'priority_id'   => $priority->getKey(),  // unauthorized trying to set the priority_id
            'agent_id'      => $agent->getKey(),  // unauthorized trying to set the agent_id
            '_token'        => csrf_token(),
        ];

        $this->actingAs($user)
            ->json('POST', $url, $ticketInvalidData)
            ->seeJson([
                'user_class'    => ['You are not authorized to modify user class !'],
                'user_id'       => ['You are not authorized to modify user id !'],
                'status_id'     => ['You are not authorized to modify status id !'],
                'priority_id'   => ['You are not authorized to modify priority id !'],
                'agent_id'      => ['You are not authorized to modify agent id !'],
            ])
            ->seeStatusCode(422);

        $ticketValidData = [
            'user_id'       => $user->getKey(),
            'user_class'    => 'user',
            'subject'       => $this->faker->sentence(),
            'content'       => $this->faker->paragraph(),
            'category_id'   => $category->getKey(),
            'status_id'     => $status->getKey(),
            'priority_id'   => $priority->getKey(),
            'agent_id'      => $agent->getKey(),
            '_token'        => csrf_token(),
        ];

        $this->actingAs($agent)
            ->json('POST', $url, $ticketValidData)
            ->seeStatusCode(200);
    }

    /**
     * Update a single ticket.
     *
     * @test
     */
    public function update_a_single_ticket()
    {
        \Session::start(); // for csrf_token to work

        $category = $this->createCategory();
        $categoryUpdate = $this->createCategory();
        $status = $this->createStatus();
        $priority = $this->createPriority();
        $user = $this->createUser();
        $agent = $this->createAgent();
        $agent->addToCategory([$category->getKey(), $categoryUpdate->getKey()]);

        $ticket = $this->createTicket(['user' => $user, 'category_id' => $category->getKey()]);

        $url = TicketitHelpers::getApiRoutePath('ticket.update', $ticket->getKey());
        $ticket_show_url = TicketitHelpers::getApiRoutePath('ticket.show', $ticket->getKey());

        // validation rules can be found at config/ticketit/validation.php

        // missing subject, content, priority, and others are wrong data
        $ticketAllFields = [
            'user_id'       => $agent->getKey(),       // unauthorized
            'user_class'    => 'user',  // unauthorized
            'subject'       => $this->faker->sentence(),
            'content'       => $this->faker->paragraph(),
            'category_id'   => $categoryUpdate->getKey(), // unauthorized
            'status_id'     => $status->getKey(),  // unauthorized
            'priority_id'   => $priority->getKey(),  // unauthorized
            'agent_id'      => $agent->getKey(),  // unauthorized
            '_token'        => csrf_token(),
        ];

        $ticketUserFields = [
            'subject'       => $this->faker->sentence(),
            'content'       => $this->faker->paragraph(),
            '_token'        => csrf_token(),
        ];

        $this->actingAs($user)
            ->json('PUT', $url, $ticketAllFields)
            ->seeJson([
                'user_class'    => ['You are not authorized to modify user class !'],
                'user_id'       => ['You are not authorized to modify user id !'],
                'status_id'     => ['You are not authorized to modify status id !'],
                'priority_id'   => ['You are not authorized to modify priority id !'],
                'agent_id'      => ['You are not authorized to modify agent id !'],
            ])
            ->seeStatusCode(422);

        $this->actingAs($user)
            ->json('PUT', $url, $ticketUserFields)
            ->seeStatusCode(200);

        $this->actingAs($user)
            ->json('GET', $ticket_show_url)
            ->seeJson([
                'subject'   => $ticketUserFields['subject'],
                'content'   => $ticketUserFields['content'],
            ]);

        $this->actingAs($agent)
            ->json('PUT', $url, $ticketAllFields)
            ->seeStatusCode(200);

        $this->actingAs($agent)
            ->json('Get', $ticket_show_url)
            ->seeJson(['user_info' => ["email" => $user->email, "name" => $user->name]])
            ->seeJson(['subject' => $ticketAllFields['subject']])
            ->seeJson(['content' => $ticketAllFields['content']])
            ->seeJson(['category_info' => ['color' => $categoryUpdate->color, 'name' => $categoryUpdate->name]])
            ->seeJson(['status_info' => ['color' => $status->color, 'name' => $status->name]])
            ->seeJson(['priority_info' => ['color' => $priority->color, 'name' => $priority->name]]);
    }

    /**
     * Access ticket uses it token.
     *
     * @test
     */
    public function access_ticket_using_ticket_access_token()
    {
        $ticketOne = $this->createTicket();
        $ticketTwo = $this->createTicket();

        $this->json('GET', route('api.ticket.token.show', $ticketOne->access_token))
            ->seeJson([
                'subject' => $ticketOne->subject
            ])
            ->dontSeeJson([
                'subject' => $ticketTwo->subject
            ]);
    }

    /**
     * Destroy a ticket
     *
     * @test
     */
    public function destroy_ticket()
    {
        \Session::start();

        $user = $this->createUser();
        $agent = $this->createAgent();
        $categoryAdmin = $this->createAgent();

        $categoy = $this->createCategory();
        $categoy->addAgent([$agent->id, $categoryAdmin->getKey()]);
        $categoy->assignAdmin($categoryAdmin->getKey());

        $ticket = $this->createTicket([
            'user' => $user,
            'category_id' => $categoy->getKey(),
            'agent_id' => $agent->getKey(),
        ]);
        // only this ticket category admin, can delete it (per acl.php config)
        $this->actingAs($user)
            ->json('delete', route('api.ticket.destroy', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(403);

        $this->actingAs($agent)
            ->json('delete', route('api.ticket.destroy', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(403);

        $this->actingAs($categoryAdmin)
            ->json('delete', route('api.ticket.destroy', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(200);
    }

    /**
     * Close a ticket
     *
     * @test
     */
    public function close_ticket()
    {
        \Session::start();

        $user = $this->createUser();
        $anotherUser = $this->createUser();
        $agent = $this->createAgent();

        $ticket = $this->createTicket([
            'user' => $user,
        ]);

        // only this ticket owner and any agent, can close it (per acl.php config)
        $this->actingAs($anotherUser)
            ->json('put', route('api.ticket.close', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(403);

        $this->actingAs($user)
            ->json('put', route('api.ticket.close', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(200);

        $ticket = \TicketitTicket::find(1);
        $this->assertTrue($ticket->closed_at != null);
        $ticket->closed_at = new \DateTime('now');
        $ticket->save();

        $this->actingAs($agent)
            ->json('put', route('api.ticket.close', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(200);

        $ticket = \TicketitTicket::find(1);
        $this->assertTrue($ticket->closed_at != null);
    }

    /**
     * Close a ticket
     *
     * @test
     */
    public function reopen_ticket()
    {
        \Session::start();

        $user = $this->createUser();
        $anotherUser = $this->createUser();
        $agent = $this->createAgent();

        $ticket = $this->createTicket([
            'user' => $user,
        ]);
        $ticket->closed_at = new \DateTime('now');
        $ticket->save();

        // only this ticket owner and any agent, can close it (per acl.php config)
        $this->actingAs($anotherUser)
            ->json('put', route('api.ticket.reopen', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(403);

        $this->actingAs($user)
            ->json('put', route('api.ticket.reopen', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(200);

        $ticket = \TicketitTicket::find(1);
        $this->assertTrue($ticket->closed_at == null);

        // close it
        $ticket->closed_at = new \DateTime('now');
        $ticket->save();

        $this->actingAs($agent)
            ->json('put', route('api.ticket.reopen', $ticket->getKey()), ['_token' => csrf_token()])
            ->seeStatusCode(200);

        $ticket = \TicketitTicket::find(1);
        $this->assertTrue($ticket->closed_at == null);
    }


}

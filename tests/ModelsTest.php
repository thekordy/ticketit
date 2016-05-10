<?php

use Kordy\Ticketit\Traits\ModelsFakerOperationsTrait;

class ModelsTest extends TicketitTestCase
{
    use ModelsFakerOperationsTrait;


    /** @test */
    public function can_create_and_delete_agent_flag()
    {
        $agent = $this->createAgent();

        $this->seeInDatabase(TicketitAgent::getTable(),
            ['name' => $agent->name, 'ticketit_agent' => 1]
        );

        $agent->removeFromAgents();

        $this->dontSeeInDatabase(TicketitAgent::getTable(),
            ['name' => $agent->name, 'ticketit_agent' => 1]
        );
    }

    /** @test */
    public function can_create_and_delete_admin_flag()
    {
        $admin = $this->createAdmin();

        $this->seeInDatabase(TicketitAdmin::getTable(),
            ['name' => $admin->name, 'ticketit_admin' => 1]
        );

        $admin->removeFromAdmins();

        $this->dontSeeInDatabase(TicketitAdmin::getTable(),
            ['name' => $admin->name, 'ticketit_admin' => 1]
        );
    }

    /** @test */
    public function can_crud_ticketit_statuses()
    {
        $created = $this->createStatus();

        $this->SeeInDatabase(TicketitStatus::getTable(),
            ['name' => $created->name, 'color' => $created->color]
        );

        $status = TicketitStatus::find(1);

        $status->name = 'status test';
        $status->color = 'red';
        $status->save();

        $this->SeeInDatabase(TicketitStatus::getTable(),
            ['name' => 'status test', 'color' => 'red']
        );

        $status->delete();

        $this->dontSeeInDatabase(TicketitStatus::getTable(),
            ['name' => 'status test', 'color' => 'red']
        );
    }

    /** @test */
    public function can_crud_priorities()
    {
        $created = $this->createPriority();

        $this->SeeInDatabase(TicketitPriority::getTable(),
            ['name' => $created->name, 'color' => $created->color]
        );

        $priority = TicketitPriority::find(1);

        $priority->name = 'priority test';
        $priority->color = 'red';
        $priority->save();

        $this->SeeInDatabase(TicketitPriority::getTable(),
            ['name' => 'priority test', 'color' => 'red']
        );

        $priority->delete();

        $this->dontSeeInDatabase(TicketitPriority::getTable(),
            ['name' => 'priority test', 'color' => 'red']
        );
    }

    /** @test */
    public function can_crud_categories()
    {
        $created = $this->createCategory();

        $this->SeeInDatabase(TicketitCategory::getTable(),
            ['name' => $created->name, 'color' => $created->color]
        );

        $category = TicketitCategory::find(1);

        $category->name = 'category test';
        $category->color = 'red';
        $category->save();

        $this->SeeInDatabase(TicketitCategory::getTable(),
            ['name' => 'category test', 'color' => 'red']
        );

        $category->delete();

        $this->dontSeeInDatabase(TicketitCategory::getTable(),
            ['name' => 'category test', 'color' => 'red']
        );
    }

    /** @test */
    public function can_add_and_remove_agent_from_category()
    {
        $agent = $this->createAgent();
        $category = $this->createCategory();
        // using agent trait function addToCategory()
        $agent->addToCategory($category);
        // using agent belongsToMany category relation
        $this->assertEquals($category->name, $agent->categories()->get()->first()->name);
        // using agent trait function removeFromCategory()
        $agent->removeFromCategory($category);

        $this->assertNull($agent->categories()->get()->first());

        $agent2 = $this->createAgent();
        $category2 = $this->createCategory();
        // using category trait function addAgent()
        $category2->addAgent($agent2);
        // using category belongsToMany agent relation
        $this->assertEquals($agent2->name, $category2->agents()->get()->first()->name);
        // using category trait function removeAgent()
        $category2->removeAgent($agent2);

        $this->assertNull($category2->agents()->get()->first());
    }

    /** @test */
    public function can_create_a_ticket()
    {
        $ticket = $this->createTicket();
        $this->seeInDatabase($ticket->getTable(), ['subject' => $ticket->subject]);
    }

    /** @test */
    public function can_list_user_own_tickets()
    {
        $user1 = $this->createUser();
        $user2 = $this->createUser();
        // create 2 tickets per each user
        for ($i = 0; $i < 2; $i++) {
            $this->createTicket(['user' => $user1]);
            $this->createTicket(['user' => $user2]);
        }
        $this->assertEquals([1, 3], $user1->ownTickets()->lists('id')->toArray());
        // using ticket trait ticketable relation
        $this->assertEquals($user2->name, TicketitTicket::find(4)->ticketable->name);
    }

    /** @test */
    public function can_list_agent_own_tickets()
    {
        $user = $this->createUser();
        $agent = $this->createAgent();
        // create 2 tickets per each user
        for ($i = 0; $i < 2; $i++) {
            $this->createTicket(['user' => $user]);
            $this->createTicket(['user' => $agent]);
        }
        $this->assertEquals([1, 3], $user->ownTickets()->lists('id')->toArray());
        $this->assertEquals([2, 4], $agent->ownTickets()->lists('id')->toArray());
        // using ticket trait ticketable relation
        $this->assertEquals($agent->name, TicketitTicket::find(4)->ticketable->name);
    }

    /** @test */
    public function can_list_agent_assigned_tickets()
    {
        $user = $this->createUser();
        $agent1 = $this->createAgent();
        $agent2 = $this->createAgent();

        $this->createTicket(['user' => $user, 'agent_id' => $agent1->id]);
        $this->createTicket(['user' => $user, 'agent_id' => $agent2->id]);

        $this->assertEquals([1, 2], $user->ownTickets()->lists('id')->toArray());
        // get tickets using agent hasMany tickets relation
        $this->assertEquals([1], $agent1->assignedTickets()->lists('id')->toArray());
        // get tickets using ticket scope byAgent()
        $this->assertEquals(2, TicketitTicket::byAgent($agent2->id)->first()->id);
    }

    /** @test */
    public function can_list_admin_own_tickets()
    {
        $user = $this->createUser();
        $admin = $this->createAdmin();
        // create 2 tickets per each user
        for ($i = 0; $i < 2; $i++) {
            $this->createTicket(['user' => $user]);
            $this->createTicket(['user' => $admin]);
        }
        $this->assertEquals([1, 3], $user->ownTickets()->lists('id')->toArray());
        $this->assertEquals([2, 4], $admin->ownTickets()->lists('id')->toArray());
    }

    /** @test */
    public function can_list_tickets_by_status()
    {
        $user = $this->createUser();
        $status1 = $this->createStatus();
        $status2 = $this->createStatus();

        $this->createTicket(['user' => $user, 'status_id' => $status1->id]);
        $this->createTicket(['user' => $user, 'status_id' => $status2->id]);

        $this->assertEquals([1, 2], $user->ownTickets()->lists('id')->toArray());
        // using status trait hasMany tickets relation
        $this->assertEquals([1], $status1->tickets()->lists('id')->toArray());
        // using ticket trait scope byStatus()
        $this->assertEquals([2], TicketitTicket::byStatus($status2->id)->lists('id')->toArray());
    }

    /** @test */
    public function can_list_tickets_by_priority()
    {
        $user = $this->createUser();
        $priority1 = $this->createPriority();
        $priority2 = $this->createPriority();

        $this->createTicket(['user' => $user, 'priority_id' => $priority1->id]);
        $this->createTicket(['user' => $user, 'priority_id' => $priority2->id]);

        $this->assertEquals([1, 2], $user->ownTickets()->lists('id')->toArray());
        // using priority trait hasMany tickets relation
        $this->assertEquals([1], $priority1->tickets()->lists('id')->toArray());
        // using ticket trait scope byPriority()
        $this->assertEquals([2], TicketitTicket::byPriority($priority2->id)->lists('id')->toArray());
    }

    /** @test */
    public function can_list_tickets_by_category()
    {
        $user = $this->createUser();
        $category1 = $this->createCategory();
        $category2 = $this->createCategory();

        $this->createTicket(['user' => $user, 'category_id' => $category1->id]);
        $this->createTicket(['user' => $user, 'category_id' => $category2->id]);

        $this->assertEquals([1, 2], $user->ownTickets()->lists('id')->toArray());
        // using category trait hasMany tickets relation
        $this->assertEquals([1], $category1->tickets()->lists('id')->toArray());
        // using ticket trait scope byCategory()
        $this->assertEquals([2], TicketitTicket::byCategory($category2->id)->lists('id')->toArray());
    }

    /** @test */
    public function user_agent_admin_can_create_a_comment()
    {
        $user = $this->createUser();
        $agent = $this->createAgent();
        $admin = $this->createAdmin();
        $ticket = $this->createTicket(['user' => $user]);
        // create 3 comments from 3 different users on same ticket
        $comment1 = $this->createComment(['user' => $user, 'ticket_id' => $ticket->id]);
        $comment2 = $this->createComment(['user' => $agent, 'ticket_id' => $ticket->id]);
        $comment3 = $this->createComment(['user' => $admin, 'ticket_id' => $ticket->id]);
        $this->assertEquals([1, 2, 3], $ticket->comments()->lists('id')->toArray());
        // using comment trait commentable relation
        $this->assertEquals($user->name, $comment1->commentable->name);
        $this->assertEquals($agent->name, $comment2->commentable->name);
        $this->assertEquals($admin->name, $comment3->commentable->name);
    }
}

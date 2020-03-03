<?php

namespace Kordy\Ticketit\Tests\Integration;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Services\TicketOperationsInterface;
use Kordy\Ticketit\Dto\TicketQuery;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Ticket;

class TicketServiceTest extends TestCase
{
	/**
	 * @var TicketOperationsInterface
	 */
	private $ticketOperations;

	public function setUp(): void
	{
		parent::setUp();

		$this->ticketOperations = $this->app->make(TicketOperationsInterface::class);

		$this->loadLaravelMigrations();
		$this->artisan('migrate')->run();
		$this->withFactories(__DIR__.'/../../Factories');
	}

	public function testCreateNewUserTicketWithAgentInformationProvided()
    {
	    /** @var TicketInterface $ticketData */
	    $ticketData = factory(Ticket::class)->make(
	    	[
	    		'user_id' => 1,
			    'agent_id' => 2
		    ]
	    );

	    /** @var TicketInterface $ticket */
	    $ticket = $this->ticketOperations->create($ticketData);

	    $this->assertEquals($ticketData, $ticket);
	    $this->assertInstanceOf(Carbon::class, $ticketData->getCreatedAt());
	    $this->assertDatabaseHas('ticketit', $ticketData->toArray());
    }

	public function testCreateNewUserTicketAndAutoSelectAgent()
    {
    	// create 3 agents and assign them to cat 1
    	$agents = factory(Agent::class, 3)
		    ->create()
		    ->each(function ($agent) {
			    DB::table('ticketit_categories_users')
				    ->insert([
				    	'category_id' => 1,
				    	'user_id' => $agent->getId(),
				    ]);
		    });

	    // create 3 agents and assign them to cat 2
    	factory(Agent::class, 3)
		    ->create()
		    ->each(function ($agent) {
			    DB::table('ticketit_categories_users')
				    ->insert([
					    'category_id' => 2,
					    'user_id' => $agent->getId(),
				    ]);
		    });

    	// create different amounts of tickets per agent
    	factory(Ticket::class, 1)->create([
    		'category_id' => 1,
		    'agent_id' => $agents->get(0)->id
	    ]);
    	factory(Ticket::class, 2)->create([
		    'category_id' => 1,
		    'agent_id' => $agents->get(1)->id
	    ]);
    	factory(Ticket::class, 3)->create([
		    'category_id' => 1,
		    'agent_id' => $agents->get(2)->id
	    ]);

    	// Create new ticket with no agent id, so an agent is automatically picked
	    /** @var TicketInterface $ticketData */
	    $ticketData = factory(Ticket::class)->make([
		    'category_id' => 1,
	    	'agent_id' => null,
		    'user_id' => 1
	    ]);

	    /** @var TicketInterface $ticket */
	    $ticket = $this->ticketOperations->create($ticketData);

	    $this->assertSame($agents->get(0)->id, $ticket->getAgentId());
    }

	public function testReadANonExistentTicketByTicketIdThrowsNotFoundException()
    {
    	$this->expectException(TicketNotFoundException::class);
	    $this->ticketOperations->findTicketById(1);
    }

	public function testReadATicketByTicketId()
    {
	    $ticketData = factory(Ticket::class)->create();
	    $ticket =  $this->ticketOperations->findTicketById(1);

	    $this->assertEquals($ticketData->toArray(), $ticket->toArray());
    }

    // list all tickets
	public function testListAllTickets()
	{
		factory(Ticket::class, 3)->create();

		$this->assertCount(3, $this->ticketOperations->find());
	}

	// list open tickets by user and category ids
	public function testListOpenTickets()
	{
		factory(Ticket::class, 2)->create([
			'status_id' => 1,
			'user_id' => 2,
			'category_id' => 3,
		]);
		factory(Ticket::class, 3)->create(['status_id' => 2]);

		$query = new TicketQuery();
		$query->statusId(1) // todo change to a method $query->closed() and use setting default_closed_id
			->userId(2)
			->categoryId(3);

		$this->assertCount(2, $this->ticketOperations->find($query));
	}

	public function testListTicketsWithPagination()
	{
		factory(Ticket::class, 5)->create();

		$query = new TicketQuery();
		$query->setOffset(1)
			->setLimit(2);

		$results = $this->ticketOperations->find($query);

		$this->assertCount(2, $results);
	}

	public function testListTicketsWithSorting()
	{
		factory(Ticket::class, 5)->create();

		$query = new TicketQuery();

		$this->assertSame(1, $this->ticketOperations->find($query)[0]->getId());

		$query->setOrderBy(['id', 'desc']);

		$this->assertSame(5, $this->ticketOperations->find($query)[0]->getId());
	}

	public function testUpdateTicket()
	{
		factory(Ticket::class, 1)->create();

		$newSubject = 'updated subject';
		$this->ticketOperations->update(1, ['subject' => $newSubject]);

		$this->assertDatabaseHas('ticketit', [
			'id' => 1,
			'subject' => $newSubject
		]);
	}

	public function testDeleteTicket()
	{
		factory(Ticket::class, 1)->create();

		$this->ticketOperations->delete(1);

		$this->assertDatabaseMissing('ticketit', [
			'id' => 1
		]);
	}
}

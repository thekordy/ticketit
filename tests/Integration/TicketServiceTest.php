<?php

namespace Kordy\Ticketit\Tests\Integration;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Services\TicketOperationsInterface;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;
use Kordy\Ticketit\Models\Agent;
use Kordy\Ticketit\Models\Ticket;

class TicketServiceTest extends TestCase
{
	/**
	 * @var TicketOperationsInterface
	 */
	private $ticketService;

	public function setUp(): void
	{
		parent::setUp();

		$this->ticketService = $this->app->make(TicketOperationsInterface::class);

		$this->loadLaravelMigrations();
		$this->artisan('migrate')->run();
		$this->withFactories(__DIR__.'/../../Factories');
	}

	public function testCreateNewUserTicketWithAgentInformationProvided()
    {
	    $userId = 1;
	    $agentId = 2;
	    /** @var TicketInterface $ticketData */
	    $ticketData = factory(Ticket::class)->make();

	    /** @var TicketInterface $ticket */
	    $ticket = $this->ticketService->createUserTicket($ticketData, $userId, $agentId);
	    $ticketData->setUserId($userId);
	    $ticketData->setUserType(TicketInterface::OWNER_TYPE_USER);
	    $ticketData->setAgentId($agentId);

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
	    $userId = 1;
	    /** @var TicketInterface $ticketData */
	    $ticketData = factory(Ticket::class)->make([
		    'category_id' => 1,
	    	'agent_id' => null
	    ]);

	    /** @var TicketInterface $ticket */
	    $ticket = $this->ticketService->createUserTicket($ticketData, $userId);

	    $this->assertSame($agents->get(0)->id, $ticket->getAgentId());
    }

	public function testReadANonExistentTicketByTicketIdThrowsNotFoundException()
    {
    	$this->expectException(TicketNotFoundException::class);
	    $this->ticketService->getTicketById(1);
    }

	public function testReadATicketByTicketId()
    {
	    $ticketData = factory(Ticket::class)->create();
	    $ticket =  $this->ticketService->getTicketById(1);

	    $this->assertEquals($ticketData->toArray(), $ticket->toArray());
    }
}

<?php

namespace Kordy\Ticketit\Repositories;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Kordy\Ticketit\Contracts\Entities\AgentInterface;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Repositories\AgentRepositoryInterface;
use Kordy\Ticketit\Exceptions\TicketServiceException;

class AgentRepository implements AgentRepositoryInterface
{
	/**
	 * @var AgentInterface
	 */
	private $agentModel;

	/**
	 * AgentRepository constructor.
	 *
	 * @param AgentInterface $agentModel
	 */
	public function __construct(AgentInterface $agentModel)
	{
		$this->agentModel = $agentModel;
	}

	/**
	 * @inheritDoc
	 */
	public function find(int $id): AgentInterface
	{
		$agent = $this->getQueryBuilder()->find($id);

		if ($agent instanceof AgentInterface) {
			return $agent;
		}

		return $this->agentModel::fromArray(json_decode(json_encode($agent), true));
	}

	/**
	 * @inheritDoc
	 */
	public function pickAgentForTicket(TicketInterface $ticketData): AgentInterface
	{
		$categoryId = $ticketData->getCategoryId();

		$agent = DB::table(config('ticketit.db.categories_agents'), 'cat_agents')
			->leftJoin(
				config('ticketit.db.tickets').' as ticketit',
				'cat_agents.user_id',
				'=',
				'ticketit.agent_id'
			)->select(DB::raw('cat_agents.user_id as id, count(ticketit.id) as tickets_count'))
			->groupBy('ticketit.agent_id')
			->orderBy('tickets_count', 'asc')
			->where('cat_agents.category_id', $categoryId)
			->first();

		if (!$agent) {
			throw new TicketServiceException("Could not find suitable agent for category id $categoryId");
		}

		return $this->find((int) $agent->id);
	}

	/**
	 * @return Builder
	 */
	private function getQueryBuilder()
	{
		return DB::table($this->agentModel->getTable());
	}
}
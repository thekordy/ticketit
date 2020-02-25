<?php

namespace Kordy\Ticketit\Contracts\Repositories;

use Kordy\Ticketit\Contracts\Entities\AgentInterface;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;

interface AgentRepositoryInterface
{
	/**
	 * Find an agent by their id
	 *
	 * @param int $id
	 *
	 * @return AgentInterface
	 */
	public function find(int $id): AgentInterface;

	/**
	 * Does some logic to pick the most appropriate agent for specific ticket.
	 *
	 * @param TicketInterface $ticketData
	 *
	 * @return AgentInterface
	 */
	public function pickAgentForTicket(TicketInterface $ticketData): AgentInterface;
}
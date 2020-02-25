<?php

namespace Kordy\Ticketit\Contracts\Services;

use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;

interface TicketOperationsInterface
{
	/**
	 * Create a new ticket.
	 *
	 * @param TicketInterface $ticketData
	 * @param int             $userId
	 * @param int|null $agentId If null, it's assumed that the method will have an algorithm to pick up the
	 *                          right Agent for the ticket (such as the agent with least tickets)
	 *
	 * @return TicketInterface
	 *
	 */
	public function createUserTicket(
		TicketInterface $ticketData,
		int $userId,
		int $agentId = null
	): TicketInterface;

	/**
	 * Get a specific ticket by its id.
	 *
	 * @param int $id
	 *
	 * @return TicketInterface
	 * @throws TicketNotFoundException
	 */
	public function getTicketById(int $id): TicketInterface;
}
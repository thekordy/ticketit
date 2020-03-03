<?php

namespace Kordy\Ticketit\Contracts\Services;

use Kordy\Ticketit\Contracts\Dto\TicketQueryInterface;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;

interface TicketOperationsInterface
{
	/**
	 * Create a new ticket.
	 * If agent_id is null, it's assumed that the method will have an algorithm to
	 * pick up the right Agent for the ticket (such as the agent with least tickets)
	 *
	 * @param TicketInterface $ticketData
	 *
	 * @return TicketInterface
	 *
	 */
	public function create(TicketInterface $ticketData): TicketInterface;

	/**
	 * Update ticket data in database.
	 *
	 * @param int   $id
	 * @param array $data
	 *
	 * @return TicketInterface
	 */
	public function update(int $id, array $data): TicketInterface;

	/**
	 * Delete a ticket from database.
	 *
	 * @param int   $id
	 */
	public function delete(int $id);

	/**
	 * Get a specific ticket by its id.
	 *
	 * @param int $id
	 *
	 * @return TicketInterface
	 * @throws TicketNotFoundException
	 */
	public function findTicketById(int $id): TicketInterface;

	/**
	 * Find tickets.
	 *
	 * @param TicketQueryInterface|null $ticketQuery
	 *
	 * @return TicketInterface[]
	 */
	public function find(TicketQueryInterface $ticketQuery = null): array;
}
<?php

namespace Kordy\Ticketit\Contracts\Repositories;

use Kordy\Ticketit\Contracts\Dto\TicketQueryInterface;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;
use Kordy\Ticketit\Exceptions\TicketServiceException;

interface TicketRepositoryInterface
{
	/**
	 * Create a new ticket and persist it to the DB.
	 *
	 * @param TicketInterface $ticketData
	 *
	 * @return TicketInterface
	 * @throws TicketServiceException
	 */
	public function create(TicketInterface $ticketData): TicketInterface;

	/**
	 * Update ticket data in DB.
	 *
	 * @param int   $id
	 * @param array $data
	 *
	 * @return TicketInterface
	 */
	public function update(int $id, array $data): TicketInterface;

	/**
	 * Find all tickets providing search values in TicketInterface object.
	 *
	 * @param TicketQueryInterface|null $ticketsQuery
	 *
	 * @return TicketInterface[]
	 */
	public function find(TicketQueryInterface $ticketsQuery = null): array;

	/**
	 * @param int $id
	 *
	 * @return void
	 */
	public function delete(int $id);
}
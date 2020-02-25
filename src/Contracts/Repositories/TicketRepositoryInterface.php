<?php

namespace Kordy\Ticketit\Contracts\Repositories;

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
	 * Find a ticket by its id.
	 *
	 * @param int $id
	 *
	 * @return TicketInterface
	 * @throws TicketNotFoundException
	 * @throws TicketServiceException
	 */
	public function find(int $id): TicketInterface;
}
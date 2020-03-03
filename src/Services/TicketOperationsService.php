<?php

namespace Kordy\Ticketit\Services;

use Kordy\Ticketit\Contracts\Dto\TicketQueryInterface;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Repositories\AgentRepositoryInterface;
use Kordy\Ticketit\Contracts\Repositories\TicketRepositoryInterface;
use Kordy\Ticketit\Contracts\Services\TicketOperationsInterface;
use Kordy\Ticketit\Dto\TicketQuery;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;
use Kordy\Ticketit\Exceptions\TicketServiceException;

class TicketOperationsService implements TicketOperationsInterface
{
	/**
	 * @var TicketRepositoryInterface
	 */
	private $ticketRepository;

	/**
	 * @var AgentRepositoryInterface
	 */
	private $agentRepository;

	/**
	 * TicketOperationsService constructor.
	 *
	 * @param TicketRepositoryInterface $ticketRepository
	 * @param AgentRepositoryInterface  $agentRepository
	 */
	public function __construct(
		TicketRepositoryInterface $ticketRepository,
		AgentRepositoryInterface $agentRepository
	) {
		$this->ticketRepository = $ticketRepository;
		$this->agentRepository = $agentRepository;
	}

	/**
	 * @inheritDoc
	 * @throws TicketServiceException
	 */
	public function create(TicketInterface $ticketData): TicketInterface
	{
		if (is_null($agentId = $ticketData->getAgentId())) {
			$agentId = $this->agentRepository->pickAgentForTicket($ticketData)->getId();
			$ticketData->setAgentId($agentId);
		}

		return $this->ticketRepository->create($ticketData);
	}

	/**
	 * @inheritDoc
	 * @throws TicketServiceException
	 */
	public function update(int $id, array $data): TicketInterface
	{
		return $this->ticketRepository->update($id, $data);
	}

	/**
	 * @inheritDoc
	 */
	public function delete(int $id)
	{
		$this->ticketRepository->delete($id);
	}

	/**
	 * @inheritDoc
	 */
	public function findTicketById(int $id): TicketInterface
	{
		$query = new TicketQuery();
		$query->id($id);

		$ticket = $this->ticketRepository->find($query);

		if (empty($ticket)) {
			throw new TicketNotFoundException("Ticket id $id is not found.");
		}

		return $ticket[0];
	}

	/**
	 * @inheritDoc
	 */
	public function find(TicketQueryInterface $ticketQuery = null): array
	{
		return $this->ticketRepository->find($ticketQuery);
	}
}
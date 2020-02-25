<?php

namespace Kordy\Ticketit\Services;

use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Repositories\AgentRepositoryInterface;
use Kordy\Ticketit\Contracts\Repositories\TicketRepositoryInterface;
use Kordy\Ticketit\Contracts\Services\TicketOperationsInterface;
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
	public function createUserTicket(
		TicketInterface $ticketData,
	    int $userId,
	    int $agentId = null
	): TicketInterface
	{
		$ticketData->setUserId($userId);
		$ticketData->setUserType(TicketInterface::OWNER_TYPE_USER);

		if (is_null($agentId) && is_null($ticketData->getAgentId())) {
			$agentId = $this->agentRepository->pickAgentForTicket($ticketData)->getId();
		}

		$ticketData->setAgentId($agentId);

		return $this->ticketRepository->create($ticketData);
	}

	/**
	 * @inheritDoc
	 */
	public function getTicketById(int $id): TicketInterface
	{
		return $this->ticketRepository->find($id);
	}
}
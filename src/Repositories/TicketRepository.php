<?php

namespace Kordy\Ticketit\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Repositories\TicketRepositoryInterface;
use Kordy\Ticketit\Exceptions\TicketNotFoundException;
use Kordy\Ticketit\Exceptions\TicketServiceException;

class TicketRepository implements TicketRepositoryInterface
{
	/**
	 * @var TicketInterface
	 */
	private $ticketModel;

	public function __construct(TicketInterface $ticketModel)
	{
		$this->ticketModel = $ticketModel;
	}

	/**
	 * @inheritDoc
	 */
	public function find(int $id): TicketInterface
	{
		$ticket = $this->getQueryBuilder()->find($id);

		switch (true) {

			case is_null($ticket):
				throw new TicketNotFoundException("Could not find any ticket with id $id");

			case $ticket instanceof TicketInterface:
				return $ticket;

			case is_object($ticket) || is_array($ticket):
				$ticketData = is_array($ticket) ? $ticket : json_decode(json_encode($ticket), true);
				return $this->ticketModel::fromArray($ticketData);

			default:
				throw new TicketServiceException('Unknown data type.');
		}
	}

	/**
	 * @inheritDoc
	 */
	public function create(TicketInterface $ticketData): TicketInterface
	{
		if ($ticketData instanceof Model) {
			$ticketData->save();

			return $ticketData;
		}

		$id = $this->getQueryBuilder()->insertGetId($ticketData->toArray());

		return $this->find($id);
	}

	/**
	 * @return Builder
	 */
	private function getQueryBuilder()
	{
		return DB::table($this->ticketModel->getTable());
	}
}
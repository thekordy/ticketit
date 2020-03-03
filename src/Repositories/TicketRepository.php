<?php

namespace Kordy\Ticketit\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Kordy\Ticketit\Contracts\Dto\TicketQueryInterface;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Contracts\Repositories\TicketRepositoryInterface;
use Kordy\Ticketit\Dto\TicketQuery;

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
	public function create(TicketInterface $ticketData): TicketInterface
	{
		if ($ticketData instanceof Model) {
			$ticketData->save();

			return $ticketData;
		}

		$id = $this->getQueryBuilder()->insertGetId($ticketData->toArray());

		return $this->find((new TicketQuery())->id($id))[0];
	}

	/**
	 * @inheritDoc
	 */
	public function update(int $id, array $data): TicketInterface
	{
		$this->getQueryBuilder()->where('id', $id)
			->update($data);

		return $this->find((new TicketQuery())->id($id))[0];
	}

	/**
	 * @inheritDoc
	 */
	public function delete(int $id)
	{
		$this->getQueryBuilder()->where('id', $id)
			->delete();
	}

	/**
	 * @inheritDoc
	 */
	public function find(TicketQueryInterface $ticketsQuery = null): array
	{
		$qb = $this->getQueryBuilder();

		if ($ticketsQuery) {
			foreach ($ticketsQuery->getSearchParameters() as $attribute) {
				$qb->where($attribute['field'], $attribute['operator'], $attribute['value']);
			}

			if ($ticketsQuery->getOffset()) {
				$qb->offset($ticketsQuery->getOffset());
			}

			if ($ticketsQuery->getLimit()) {
				$qb->limit($ticketsQuery->getLimit());
			}

			if (!empty($order = $ticketsQuery->getOrderBy())) {
				$qb->orderBy($order[0], $order[1]);
			}
		}

		$results = $qb->get();
		$tickets = [];

		foreach ($results as $result) {
			$tickets[] = $this->ticketModel::fromArray($this->convertObjectToArray($result));
		}

		return $tickets;
	}

	/**
	 * @return Builder
	 */
	private function getQueryBuilder()
	{
		return DB::table($this->ticketModel->getTable());
	}

	/**
	 * @param $ticket
	 *
	 * @return array
	 */
	private function convertObjectToArray(\stdClass $ticket): array
	{
		return json_decode(json_encode($ticket), true);
}
}
<?php

namespace Kordy\Ticketit\Dto;

use Kordy\Ticketit\Contracts\Dto\TicketQueryInterface;
use Kordy\Ticketit\Exceptions\TicketServiceException;

/**
 * Provide query data to search for tickets.
 *
 * @method TicketQuery id(int $id, string $operator = null)
 * @method TicketQuery subject(string $text)
 * @method TicketQuery statusId(int $id, string $operator = null)
 * @method TicketQuery priorityId(int $id, string $operator = null)
 * @method TicketQuery userId(int $id, string $operator = null)
 * @method TicketQuery userType(string $type, string $operator = null)
 * @method TicketQuery agentId(int $id, string $operator = null)
 * @method TicketQuery categoryId(int $id, string $operator = null)
 * @method TicketQuery completedAt(string $date, string $operator = null)
 * @method TicketQuery createdAt(string $date, string $operator = null)
 * @method TicketQuery updatedAt(string $date, string $operator = null)
 */
class TicketQuery implements TicketQueryInterface
{
	/** @var array  */
	const QUERYABLE_FIELDS = [
		'id',
		'subject',
		'status_id',
		'priority_id',
		'user_id',
		'user_type',
		'agent_id',
		'category_id',
		'completed_at',
		'created_at',
		'updated_at',
	];

	/** @var array  */
	const QUERY_META = [
		'orderBy',
		'offset',
		'limit',
	];

	/** @var array  */
	const STRING_DB_OPERATORS = [
		'eq' => '=', // Equal to
		'gt' => '>', // Greater than
		'lt' => '<', // Less than
		'gte' => '>=', // Greater than or equal to
		'lte' => '<=', // Less than or equal to
		'ne' => '<>', // Not equal to
		'like' => 'like', // Search similar text
		'in' => 'in', // one of range of values
	];

	/** @var string  */
	const DEFAULT_OPERATOR = 'eq';

	/**
	 * @var array
	 */
	private $searchParameters = [];

	/**
	 * @var int
	 */
	private $offset = 0;

	/**
	 * @var int
	 */
	private $limit = 0;

	/**
	 * @var array
	 */
	private $orderBy = [];

	/**
	 * @inheritDoc
	 */
	public static function buildFromString(string $queryString): TicketQueryInterface
	{
		$query = new self();
		parse_str($queryString, $queryFields);

		foreach ($queryFields as $field => $operatorAndValue) {

			if (in_array($field, self::QUERY_META)) {
				$query->setMeta($field, $operatorAndValue);
				continue;
			}

			[$operator, $value] = explode(':', $operatorAndValue);
			$value = strpos($value, ',') !== false ? explode(',', $value) : $value;
			$query->addParameter($field, $operator, $value);
		}

		return $query;
	}

	/**
	 * @inheritDoc
	 */
	public function addParameter(string $field, string $operator, $value): TicketQueryInterface
	{
		if (!in_array($field, self::QUERYABLE_FIELDS)) {
			throw new TicketServiceException("$field is invalid query field.");
		}
		if (!array_key_exists($operator, self::STRING_DB_OPERATORS)) {
			throw new TicketServiceException("$operator is invalid query operator.");
		}

		array_push(
			$this->searchParameters,
			[
				'field' => $field,
				'operator' => self::STRING_DB_OPERATORS[$operator],
				'value' => $value
			]
		);

		return $this;
	}

	/**
	 * Provide magic calls for all queryable fields.
	 *
	 * @param $name
	 * @param $arguments
	 *
	 * @return TicketQueryInterface
	 * @throws TicketServiceException
	 */
	public function __call($name, $arguments)
	{
		// camelCase to snake_case
		$field = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));

		if (in_array($field, self::QUERYABLE_FIELDS)) {
			return $this->addParameter($field, $arguments[1] ?? self::DEFAULT_OPERATOR, $arguments[0]);
		}
	}

	/**
	 * @inheritDoc
	 */
	public function getSearchParameters()
	{
		return $this->searchParameters;
	}

	/**
	 * @inheritDoc
	 */
	public function setOffset(int $offset): TicketQueryInterface
	{
		$this->offset = $offset;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getOffset(): int
	{
		return $this->offset;
	}

	/**
	 * @inheritDoc
	 */
	public function setLimit(int $limit): TicketQueryInterface
	{
		$this->limit = $limit;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getLimit(): int
	{
		return $this->limit;
	}

	/**
	 * ex: ['id', 'desc']
	 *
	 * @param array $orderBy
	 *
	 * @return TicketQuery
	 */
	public function setOrderBy(array $orderBy): TicketQueryInterface
	{
		$this->orderBy = $orderBy;

		return $this;
}

	/**
	 * @return array
	 */
	public function getOrderBy(): array
	{
		return $this->orderBy;
	}

	/**
	 * @param string $meta
	 * @param        $value
	 *
	 * @throws TicketServiceException
	 */
	private function setMeta(string $meta, $value)
	{
		if (!in_array($meta, self::QUERY_META)) {
			throw new TicketServiceException("$meta query meta is not configured.");
		}

		if (strpos($value, ':') !== false) {
			$value = explode(':', $value);
		}

		$this->{'set'.ucfirst($meta)}($value);
	}
}
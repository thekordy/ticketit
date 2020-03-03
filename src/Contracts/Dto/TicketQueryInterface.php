<?php

namespace Kordy\Ticketit\Contracts\Dto;

use Kordy\Ticketit\Exceptions\TicketServiceException;

/**
 * Provide query data to search for tickets.
 *
 * @package Kordy\Ticketit\Dto
 */
interface TicketQueryInterface
{
	/**
	 * Build this query object out of query string.
	 * ex: id=gt:10&id=lte:20&category_id=in:1,2,3
	 *
	 * @param string $queryString
	 *
	 * @return TicketQueryInterface
	 * @throws TicketServiceException
	 */
	public static function buildFromString(string $queryString): TicketQueryInterface;

	/**
	 * Add query parameter.
	 *
	 * @param string $field
	 * @param string $operator
	 * @param        $value
	 *
	 * @return TicketQueryInterface
	 */
	public function addParameter(string $field, string $operator, $value): TicketQueryInterface;

	/**
	 * Return search parameters in a format of
	 * [
	 *      [
	 *          'field' => '<db_field_name>',
	 *            'operator' => '<operator>', //any database supported operator
	 *            'value' => '<search_value>',
	 *      ],
	 * ]
	 *
	 * @return array
	 */
	public function getSearchParameters();

	/**
	 * Set the offset of results pagination.
	 *
	 * @param int $offset
	 *
	 * @return TicketQueryInterface
	 */
	public function setOffset(int $offset): TicketQueryInterface;

	/**
	 * Get the offset of results pagination.
	 *
	 * @return int
	 */
	public function getOffset(): int;

	/**
	 * Set the limit of results.
	 *
	 * @param int $limit
	 *
	 * @return TicketQueryInterface
	 */
	public function setLimit(int $limit): TicketQueryInterface;

	/**
	 * Get the limit of results pagination.
	 *
	 * @return int
	 */
	public function getLimit(): int;

	/**
	 * Get sort field and direction.
	 *
	 * @return array
	 */
	public function getOrderBy(): array;

	/**
	 * Set sort field and direction.
	 *
	 * @param array $order
	 *
	 * @return TicketQueryInterface
	 */
	public function setOrderBy(array $order): TicketQueryInterface;
}
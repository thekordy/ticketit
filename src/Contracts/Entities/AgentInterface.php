<?php

namespace Kordy\Ticketit\Contracts\Entities;

interface AgentInterface
{
	/**
	 * Create new instance from array.
	 *
	 * @param array $data
	 *
	 * @return AgentInterface
	 */
	public static function fromArray(array $data);

	/**
	 * @return string
	 */
	public function getTable();

	/**
	 * @param int $id
	 *
	 * @return AgentInterface
	 */
	public function setId(int $id);

	/**
	 * @return int
	 */
	public function getId(): int;

	/**
	 * @param string $name
	 *
	 * @return AgentInterface
	 */
	public function setName(string $name);

	/**
	 * @return string
	 */
	public function getName(): string;

	/**
	 * @param string $email
	 *
	 * @return AgentInterface
	 */
	public function setEmail(string $email);

	/**
	 * @return string
	 */
	public function getEmail(): string;
}
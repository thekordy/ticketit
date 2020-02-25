<?php

namespace Kordy\Ticketit\Contracts\Entities;

interface TicketInterface
{
	const OWNER_TYPE_USER = 'user';
	const OWNER_TYPE_GUEST = 'guest';

	/**
	 * Get the table name.
	 *
	 * @return string
	 */
	public function getTable();

	/**
	 * Set the id of the ticket.
	 *
	 * @param int $id
	 *
	 * @return TicketInterface
	 */
	public function setId(int $id);

	/**
	 * Get the ticket id.
	 *
	 * @return int
	 */
	public function getId(): int;

	/**
	 * Set the subject/title of the ticket.
	 *
	 * @param string $subject
	 *
	 * @return TicketInterface
	 */
	public function setSubject(string $subject): TicketInterface;

	/**
	 * Get the subject/title of the ticket.
	 *
	 * @return string
	 */
	public function getSubject(): string;

	/**
	 * Set the content/body of the ticket.
	 *
	 * @param string $content
	 *
	 * @return TicketInterface
	 */
	public function setContent(string $content): TicketInterface;

	/**
	 * Get the content/body of the ticket.
	 *
	 * @return string
	 */
	public function getContent(): string;

	/**
	 * Set the html content/body of the ticket.
	 *
	 * @param string $html
	 *
	 * @return TicketInterface
	 */
	public function setHtml(?string $html): TicketInterface;

	/**
	 * Get the content/body of the ticket.
	 *
	 * @return string|null
	 */
	public function getHtml(): ?string;

	/**
	 * Set the status id (related status record from ticketit_statuses).
	 *
	 * @param int $statusId
	 *
	 * @return TicketInterface
	 */
	public function setStatusId(int $statusId): TicketInterface;

	/**
	 * Get the status id (related status record from ticketit_statuses).
	 *
	 * @return int
	 */
	public function getStatusId(): int;

	/**
	 * Set the priority id (related priority record from ticketit_priorities).
	 *
	 * @param int $priorityId
	 *
	 * @return TicketInterface
	 */
	public function setPriorityId(int $priorityId): TicketInterface;

	/**
	 * Get the priority id (related priority record from ticketit_priorities).
	 *
	 * @return int
	 */
	public function getPriorityId(): int;

	/**
	 * Set the category id (related category record from ticketit_categories).
	 *
	 * @param int $categoryId
	 *
	 * @return TicketInterface
	 */
	public function setCategoryId(int $categoryId): TicketInterface;

	/**
	 * Get the category id (related category record from ticketit_categories).
	 *
	 * @return int
	 */
	public function getCategoryId(): int;

	/**
	 * Set the owner user id who this ticket relates to.
	 *
	 * @param int $userId
	 *
	 * @return TicketInterface
	 */
	public function setUserId(int $userId): TicketInterface;

	/**
	 * Get the owner user id who this ticket relates to.
	 *
	 * @return int
	 */
	public function getUserId(): int;

	/**
	 * Set the owner user type who this ticket relates to.
	 * either a system user type (self::OWNER_TYPE_USER)
	 * or a guest type (self::OWNER_TYPE_GUEST)
	 *
	 * @param string $userType
	 *
	 * @return TicketInterface
	 */
	public function setUserType(string $userType): TicketInterface;

	/**
	 * Get the owner user type who this ticket relates to.
	 * either a system user type (self::OWNER_TYPE_USER)
	 * or a guest type (self::OWNER_TYPE_GUEST)
	 *
	 * @return string
	 */
	public function getUserType(): string;

	/**
	 * Set the agent user id who is assigned to the ticket.
	 *
	 * @param int $agentId
	 *
	 * @return TicketInterface
	 */
	public function setAgentId(?int $agentId): TicketInterface;

	/**
	 * Get the agent user id who is assigned to the ticket.
	 *
	 * @return int
	 */
	public function getAgentId(): ?int;

	/**
	 * @param \DateTime $dateTime
	 *
	 * @return TicketInterface
	 */
	public function setCreatedAt(\DateTime $dateTime);

	/**
	 * @return \Carbon\Carbon
	 */
	public function getCreatedAt();

	/**
	 * @param \DateTime $dateTime
	 *
	 * @return TicketInterface
	 */
	public function setUpdatedAt(\DateTime $dateTime);

	/**
	 * @return \Carbon\Carbon
	 */
	public function getUpdatedAt();

	/**
	 * @param \DateTime|null $dateTime
	 *
	 * @return TicketInterface
	 */
	public function setCompletedAt(?\DateTime $dateTime);

	/**
	 * @return \Carbon\Carbon|null
	 */
	public function getCompletedAt();

	/**
	 * Return this ticket as an array.
	 *
	 * @return array
	 */
	public function toArray();

	/**
	 * Return this ticket as an array.
	 *
	 * @param array $data
	 *
	 * @return TicketInterface
	 */
	public static function fromArray(array $data);
}
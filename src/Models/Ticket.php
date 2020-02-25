<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Traits\ContentEllipse;
use Kordy\Ticketit\Traits\ModelCommon;
use Kordy\Ticketit\Traits\Purifiable;

class Ticket extends Model implements TicketInterface
{
    use ModelCommon, ContentEllipse, Purifiable;

    protected $dates = ['completed_at'];

	/**
	 * @return string
	 */
	public function getTable()
    {
	    return config('ticketit.db.tickets');
    }

	/**
	 * @inheritDoc
	 */
	public function setUserId(int $userId): TicketInterface
	{
		$this->user_id = $userId;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getUserId(): int
	{
		return $this->user_id;
	}

	/**
	 * @inheritDoc
	 */
	public function setUserType(string $userType): TicketInterface
	{
		$this->user_type = $userType;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getUserType(): string
	{
		return $this->user_type;
	}

	/**
	 * @inheritDoc
	 */
	public function setAgentId(?int $agentId): TicketInterface
	{
		$this->agent_id = $agentId;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getAgentId(): ?int
	{
		return $this->agent_id;
	}

	/**
	 * @inheritDoc
	 */
	public function setSubject(string $subject): TicketInterface
	{
		$this->subject = $subject;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getSubject(): string
	{
		return $this->subject;
	}

	/**
	 * @inheritDoc
	 */
	public function setContent(string $content): TicketInterface
	{
		$this->content = $content;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getContent(): string
	{
		return $this->content;
	}

	/**
	 * @inheritDoc
	 */
	public function setHtml(?string $html): TicketInterface
	{
		$this->html = $html;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getHtml(): ?string
	{
		return $this->html;
	}

	/**
	 * @inheritDoc
	 */
	public function setStatusId(int $statusId): TicketInterface
	{
		$this->status_id = $statusId;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getStatusId(): int
	{
		return $this->status_id;
	}

	/**
	 * @inheritDoc
	 */
	public function setPriorityId(int $priorityId): TicketInterface
	{
		$this->priority_id = $priorityId;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getPriorityId(): int
	{
		return $this->priority_id;
	}

	/**
	 * @inheritDoc
	 */
	public function setCategoryId(int $categoryId): TicketInterface
	{
		$this->category_id = $categoryId;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getCategoryId(): int
	{
		return $this->category_id;
	}

	/**
	 * @inheritDoc
	 */
	public function getCreatedAt(): \Carbon\Carbon
	{
		return $this->created_at;
	}

	/**
	 * @inheritDoc
	 */
	public function getUpdatedAt(): \Carbon\Carbon
	{
		return $this->updated_at;
	}

	/**
	 * @inheritDoc
	 */
	public function setCompletedAt(?\DateTime $dateTime): TicketInterface
	{
		$this->completed_at = $dateTime;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getCompletedAt(): ?\Carbon\Carbon
	{
		return $this->completed_at;
	}
}

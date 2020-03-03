<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;
use Kordy\Ticketit\Contracts\Entities\AgentInterface;
use Kordy\Ticketit\Traits\ModelCommon;

class Agent extends Model implements AgentInterface
{
	use ModelCommon;

	/**
	 * Return agents table name.
	 *
	 * @return string
	 */
	public function getTable()
	{
		return config('ticketit.db.agents');
	}

	/**
	 * @inheritDoc
	 */
	public function setName(string $name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @inheritDoc
	 */
	public function setEmail(string $email)
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @inheritDoc
	 */
	public function getEmail(): string
	{
		return $this->email;
	}
}

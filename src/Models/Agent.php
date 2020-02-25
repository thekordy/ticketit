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
		// TODO: Implement setName() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getName(): string
	{
		// TODO: Implement getName() method.
	}

	/**
	 * @inheritDoc
	 */
	public function setEmail(string $email)
	{
		// TODO: Implement setEmail() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getEmail(): string
	{
		// TODO: Implement getEmail() method.
	}
}

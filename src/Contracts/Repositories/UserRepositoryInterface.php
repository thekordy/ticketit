<?php

namespace Kordy\Ticketit\Contracts\Repositories;

use Kordy\Ticketit\Contracts\Entities\UserInterface;

interface UserRepositoryInterface
{
	/**
	 * Find a system user by their id
	 *
	 * @param int $id
	 *
	 * @return UserInterface
	 */
	public function find(int $id): UserInterface;
}
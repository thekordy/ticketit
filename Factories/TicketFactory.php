<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Kordy\Ticketit\Contracts\Entities\TicketInterface;
use Kordy\Ticketit\Models\Ticket;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Ticket::class, function (Faker $faker) {
	return [
		'subject' => $faker->text(50),
		'content' => $faker->text(500),
		'status_id' => rand(1,3),
		'priority_id' => rand(1,3),
		'category_id' => rand(1,3),
		'user_id' => rand(1,10),
		'user_type' => [TicketInterface::OWNER_TYPE_USER, TicketInterface::OWNER_TYPE_GUEST][rand(0,1)],
		'agent_id' => rand(11,20),
		'completed_at' => null,
		'html' => $faker->randomHtml(),
	];
});

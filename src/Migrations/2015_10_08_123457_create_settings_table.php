<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ticketit_settings', function (Blueprint $table) {
			$table->increments('id');
			$table->string('lang')->unique()->nullable();
			$table->string('slug')->unique()->index();
			$table->string('value');
			$table->string('default');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('ticketit_settings');
	}
}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketitTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketit_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
        });

        Schema::create('ticketit_priorities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
        });

        Schema::create('ticketit_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
        });

        Schema::create('ticketit_categories_users', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('ticketit_categories');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::create('ticketit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->longText('content');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('ticketit_statuses');
            $table->integer('priority_id')->unsigned();
            $table->foreign('priority_id')->references('id')->on('ticketit_priorities');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('agent_id')->unsigned();
            $table->foreign('agent_id')->references('id')->on('users');
            $table->integer('category_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('ticketit_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('ticket_id')->unsigned();
            $table->foreign('ticket_id')->references('id')->on('ticketit')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('ticketit_audits', function (Blueprint $table) {
            $table->increments('id');
            $table->text('operation');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('ticket_id')->unsigned();
            $table->foreign('ticket_id')->references('id')->on('ticketit')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ticketit_audits');
        Schema::drop('ticketit_comments');
        Schema::drop('ticketit');
        Schema::drop('ticketit_categories_users');
        Schema::drop('ticketit_categories');
        Schema::drop('ticketit_priorities');
        Schema::drop('ticketit_statuses');
    }
}

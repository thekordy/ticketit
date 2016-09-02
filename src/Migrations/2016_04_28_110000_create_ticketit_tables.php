<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->integer('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')
                ->references(app('TicketitAgent')->getKeyName())
                ->on(app('TicketitAgent')->getTable());
            // options are 'least_local', 'least_total', 'admin', 'manual'
            $table->string('auto_assign')->default('least_total');
        });

        Schema::create('ticketit_category_agent', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('ticketit_categories')->onDelete('cascade');
            $table->integer('agent_id')->unsigned();
            $table->foreign('agent_id')
                // get agent primary key from the configured agent model in Config/ticketit/core.php
                ->references(app('TicketitAgent')->getKeyName())
                // get agent table from the configured agent model in Config/ticketit/core.php
                ->on(app('TicketitAgent')->getTable())
                ->onDelete('cascade');

            $table->primary(['category_id', 'agent_id']);
        });

        Schema::create('ticketit_ticket', function (Blueprint $table) {
            $table->increments('id');

            $table->string('subject')->index();
            $table->longText('content');

            // for guest ticket access
            $table->string('access_token', 40)->unique();

            // for guest ticket access
            $table->string('notification_email')->nullable();

            // enable different models to create tickets such as user, agent, admin, .. etc or null for guests/emails
            $table->string('ticketable_type')->nullable();
            $table->integer('ticketable_id')->unsigned()->nullable();

            $table->index(['ticketable_type', 'ticketable_id']);


            $table->integer('agent_id')->unsigned()->nullable();
            $table->foreign('agent_id')
                ->references(app('TicketitAgent')->getKeyName())
                ->on(app('TicketitAgent')->getTable());

            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('ticketit_statuses');

            $table->integer('priority_id')->unsigned();
            $table->foreign('priority_id')->references('id')->on('ticketit_priorities');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('ticketit_categories');

            $table->timestamps();

            $table->timestamp('closed_at')->nullable()->index();
        });

        Schema::create('ticketit_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');

            $table->morphs('commentable');

            $table->integer('ticket_id')->unsigned();
            $table->foreign('ticket_id')->references('id')->on('ticketit_ticket')->onDelete('cascade');

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
        Schema::drop('ticketit_comments');
        Schema::drop('ticketit_ticket');
        Schema::drop('ticketit_category_agent');
        Schema::drop('ticketit_categories');
        Schema::drop('ticketit_priorities');
        Schema::drop('ticketit_statuses');
    }
}

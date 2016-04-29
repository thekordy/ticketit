<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // get agent table from the configured agent model in Config/ticketit/core.php
        Schema::table(app('TicketitAgent')->getTable(), function (Blueprint $table) {
            $table->boolean('ticketit_agent')->default(0);
        });
        // get administrators table from the configured admin model in Config/ticketit/core.php
        Schema::table(app('TicketitAdmin')->getTable(), function (Blueprint $table) {
            $table->boolean('ticketit_admin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(app('TicketitAgent')->getTable(), function (Blueprint $table) {
            $table->dropColumn('ticketit_agent');
        });
        Schema::table(app('TicketitAdmin')->getTable(), function (Blueprint $table) {
            $table->dropColumn('ticketit_admin');
        });
    }
}

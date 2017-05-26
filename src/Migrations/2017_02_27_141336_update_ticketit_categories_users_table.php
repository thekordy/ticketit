<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTicketitCategoriesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticketit_categories_users', function (Blueprint $table) {
            $table->boolean('autoassign')->comment('new tickets autoassign enabled')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticketit_categories_users', function (Blueprint $table) {
            $table->dropColumn('autoassign');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddAdminIdAndAutoAssignToTicketitCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('ticketit_categories')) {
            Schema::table('ticketit_categories', function (Blueprint $table) {
                $table->integer('admin_id')->unsigned()->nullable();
                $table->foreign('admin_id')
                    ->references(app('TicketitAgent')->getKeyName())
                    ->on(app('TicketitAgent')->getTable());

                $table->string('auto_assign')->default('least_local'); // options are 'least_local', 'least_total', 'admin'
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('ticketit_categories')) {
            Schema::table('ticketit_categories', function (Blueprint $table) {
                if (Schema::hasColumns('ticketit_categories', ['admin_id', 'auto_assign'])) {
                    $table->dropColumn(['admin_id', 'auto_assign']);
                }
            });
        }
    }
}

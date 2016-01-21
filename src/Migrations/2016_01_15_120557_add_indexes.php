<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
 * Add indicies for better performance
 *
 * Class AddIndexes
 */
class AddIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticketit', function (Blueprint $table) {
            $table->index('subject');
            $table->index('status_id');
            $table->index('priority_id');
            $table->index('user_id');
            $table->index('agent_id');
            $table->index('category_id');
            $table->index('completed_at');
        });

        Schema::table('ticketit_comments', function (Blueprint $table) {
            $table->index('user_id');
            $table->index('ticket_id');
        });

        Schema::table('ticketit_settings', function (Blueprint $table) {
            $table->index('lang');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticketit', function (Blueprint $table) {
            $table->dropIndex('ticketit_subject_index');
            $table->dropIndex('ticketit_status_id_index');
            $table->dropIndex('ticketit_priority_id_index');
            $table->dropIndex('ticketit_user_id_index');
            $table->dropIndex('ticketit_agent_id_index');
            $table->dropIndex('ticketit_category_id_index');
            $table->dropIndex('ticketit_completed_at_index');
        });

        Schema::table('ticketit_comments', function (Blueprint $table) {
            $table->dropIndex('ticketit_comments_user_id_index');
            $table->dropIndex('ticketit_comments_ticket_id_index');
        });

        Schema::table('ticketit_settings', function (Blueprint $table) {
            $table->dropIndex('ticketit_settings_lang_index');
            $table->dropIndex('ticketit_settings_slug_index');
        });
    }
}

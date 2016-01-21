<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHtmlcontentToTicketitAndComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ticketit', function (Blueprint $table) {
            $table->longText("html")->nullable()->after("content");
        });

        Schema::table('ticketit_comments', function (Blueprint $table) {
            $table->longText("html")->nullable()->after("content");
            $table->longText("content")->change();
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
            $table->dropColumn('html');
        });

        Schema::table('ticketit_comments', function (Blueprint $table) {
            $table->dropColumn('html');
            $table->text("content")->change();
        });
    }
}

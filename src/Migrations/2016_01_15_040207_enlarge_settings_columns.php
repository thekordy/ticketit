<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnlargeSettingsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //make value, default columns bigger
        Schema::table('ticketit_settings', function (Blueprint $table) {
            $table->mediumText('value')->change();
            $table->mediumText('default')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticketit_settings', function (Blueprint $table) {
            $table->string('value')->change();
            $table->string('default')->change();
        });
    }
}

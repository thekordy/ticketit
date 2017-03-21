<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTicketitAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketit_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ticket_id');
            $table->unsignedInteger('comment_id')->nullable();
            $table->unsignedInteger('uploaded_by_id');
            $table->string('file_path', 1000);
            $table->string('original_filename');
            $table->unsignedInteger('bytes');
            $table->string('mimetype');
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
        Schema::drop('ticketit_attachments');
    }
}

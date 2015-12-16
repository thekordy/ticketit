<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketit_attachments', function(Blueprint $table)
	{
		$table->increments('id');
		$table->string('filename');
		$table->string('filepath');
		$table->string('mime');
		$table->string('original_filename');
		$table->integer('ticket_id')->unsigned();
		$table->integer('comment_id')->unsigned()->nullable();
		$table->timestamps();
		$table->index('ticket_id');
		$table->index('comment_id');
		$table->foreign('ticket_id')->references('id')->on('ticketit')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		$table->foreign('comment_id')->references('id')->on('ticketit_comments')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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

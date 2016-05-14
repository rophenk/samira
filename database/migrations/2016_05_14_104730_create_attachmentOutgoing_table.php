<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentOutgoingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachmentOutgoing', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('outgoing_id')->unsigned()->nullable()->default(5);
            $table->string('outgoing_uuid', 36);
            $table->text('name')->nullable();
            $table->integer('size')->nullable();
            $table->text('type')->nullable();
            $table->text('url')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attachmentOutgoing');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentIncomingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachmentIncoming', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('incoming_id')->unsigned()->nullable()->default(5);
            $table->string('incoming_uuid', 36);
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
        Schema::drop('attachmentIncoming');
    }
}

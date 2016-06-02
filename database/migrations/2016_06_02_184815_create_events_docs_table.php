<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_docs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('events_id')->unsigned()->nullable()->default(5);
            $table->string('events_uuid', 36);
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->integer('userID')->unsigned()->nullable();
            $table->string('onbehalf');
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
        Schema::drop('event_docs');
    }
}

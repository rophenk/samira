<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoingActivities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('outgoingID')->unsigned()->nullable();
            $table->integer('userID')->unsigned()->nullable();
            $table->string('receiverStatus')->nullable();
            $table->integer('read')->unsigned()->nullable();
            $table->timestamp('dateSend');
            $table->string('action')->nullable();
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
        Schema::drop('outgoingActivities');
    }
}

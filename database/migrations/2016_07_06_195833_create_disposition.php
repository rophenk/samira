<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisposition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposition', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->integer('incoming_activities_id')->unsigned()->nullable();
            $table->integer('userID')->unsigned()->nullable();
            $table->integer('receiver_user_id')->nullable();
            $table->integer('disposition_trait_id')->nullable();
            $table->text('disposition_instruction')->nullable();
            $table->text('note')->nullable();
            $table->timestamp('dateSend');
            $table->integer('read')->unsigned()->nullable();
            $table->timestamp('dateRead');
            $table->text('report')->nullable();
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
        Schema::drop('disposition');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutgoingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outgoing', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uuid', 36);
            $table->date('input_date');
            $table->text('agenda_number')->nullable();
            $table->text('letter_number')->nullable();
            $table->date('letter_date');
            $table->text('sender')->nullable();
            $table->text('receiver')->nullable();
            $table->integer('attachment_count')->nullable();
            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('letter_type')->nullable();
            $table->text('letter_classification')->nullable();
            $table->text('letter_character')->nullable();
            $table->text('letter_expedition')->nullable();
            $table->text('letter_storage')->nullable();
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
        Schema::drop('outgoing');
    }
}

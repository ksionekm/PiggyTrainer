<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('intensity')->default(5);
            $table->date('date');
            $table->integer('duration');
            $table->integer('aspect_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('training_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('aspect_id')->references('id')->on('aspects');
            $table->foreign('type_id')->references('id')->on('training_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}

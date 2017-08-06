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
            $table->integer('intensity')->default(5)->comment('Intensywność treningu w skali 1-5');
            $table->date('date')->comment('Data treningu');
            $table->integer('duration')->comment('Czas trwania treningu');
            $table->integer('user_id')->unsigned()->comment('Id użytkownika');
            $table->integer('training_type_id')->unsigned()->comment('Typ treningu');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('training_type_id')->references('id')->on('training_types');
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

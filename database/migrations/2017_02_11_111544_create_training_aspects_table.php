<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingAspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_aspects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_id')->unsigned()->comment('Id treningu z tabeli trainings');
            $table->integer('aspect_id')->unsigned()->comment('Id aspectu z tabeli aspects');
            $table->decimal('value', 10, 2)->comment('Wartość aspectu');
            $table->timestamps();

            $table->foreign('training_id')->references('id')->on('trainings');
            $table->foreign('aspect_id')->references('id')->on('aspects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_aspects');
    }
}

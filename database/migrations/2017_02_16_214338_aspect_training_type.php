<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AspectTrainingType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspect_training_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('training_type_id')->unsigned();
            $table->integer('aspect_id')->unsigned();
            $table->timestamps();

            $table->foreign('training_type_id')->references('id')->on('training_types');
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
        //
    }
}

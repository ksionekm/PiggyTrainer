<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('unit', 10);
            $table->integer('training_type_id')->unsigned();
            $table->integer('training_aspect_id')->unsigned();
            $table->timestamps();

            $table->foreign('training_type_id')->references('id')->on('training_types');
            $table->foreign('training_aspect_id')->references('id')->on('training_aspects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspects');
    }
}

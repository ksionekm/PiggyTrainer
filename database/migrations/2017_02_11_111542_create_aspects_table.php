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
            $table->string('name')->comment('Nazwa aspektu');
            $table->string('unit', 10)->comment('Jednostka aspektu');
            $table->integer('training_type_id')
                ->unsigned()
                ->comment('Typ treningu do którego odnosi się aspekt');
            $table->timestamps();

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
        Schema::dropIfExists('aspects');
    }
}

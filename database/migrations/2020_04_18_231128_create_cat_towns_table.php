<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_towns', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion'); 
            $table->bigInteger('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('cat_states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_towns');
    }
}

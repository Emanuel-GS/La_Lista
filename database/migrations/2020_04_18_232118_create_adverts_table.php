<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->timestamp('fecha_registro');
            $table->string('titulo');
            $table->text('descripcion'); 
            $table->bigInteger('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('cat_types');
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('cat_categories');
            $table->bigInteger('subcategoria_id')->unsigned();
            $table->foreign('subcategoria_id')->references('id')->on('cat_subcategories'); 
            $table->bigInteger('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('cat_states'); 
            $table->bigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('cat_towns'); 
            $table->bigInteger('localidad_id')->unsigned();
            $table->foreign('localidad_id')->references('id')->on('cat_localities');
            $table->bigInteger('prioridad_id')->unsigned();
            $table->foreign('prioridad_id')->references('id')->on('cat_priorities');
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
        Schema::dropIfExists('adverts');
    }
}

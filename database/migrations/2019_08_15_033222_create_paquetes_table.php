<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('contenido')->nullable();
            $table->string('destino')->nullable();
            $table->string('precio')->nullable();
            $table->string('imagen')->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->integer('promocion_id')->unsigned();
            $table->integer('guia_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('guia_id')->references('id')->on('guias')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paquetes');
    }
}

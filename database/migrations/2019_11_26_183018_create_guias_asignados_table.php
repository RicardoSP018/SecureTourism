<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuiasAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias_asignados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('paquete_id')->unsigned();
            $table->integer('guia_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('Paquetes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('guia_id')->references('id')->on('Guias')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guias_asignados');
    }
}

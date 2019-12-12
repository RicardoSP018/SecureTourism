<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombreAgencia')->nullable();
            $table->string('nombreDueno')->nullable();
            $table->string('telefono')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo')->nullable();
            $table->string('redesSociales')->nullable();
            $table->integer('administrador_id')->unsigned();
            $table->foreign('administrador_id')->references('id')->on('administradors')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agencias');
    }
}

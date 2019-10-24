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
            $table->string('NombreAgencia')->nullable();
            $table->string('NombreDueno')->nullable();
            $table->string('Telefono')->nullable();
            $table->string('Descripcion')->nullable();
            $table->string('Direccion')->nullable();
            $table->integer('usuario_id')->unsigned();
            $table->integer('suscripcion_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('suscripcion_id')->references('id')->on('suscripciones')->onDelete('cascade')->onUpdate('cascade');
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

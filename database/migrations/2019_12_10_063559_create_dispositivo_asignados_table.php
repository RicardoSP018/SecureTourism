<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDispositivoAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo_asignados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('Inicio')->nullable();
            $table->date('Final')->nullable();
            $table->integer('dispositivo_id')->unsigned();
            $table->integer('paquete_adquiridos_id')->unsigned();
            $table->foreign('paquete_adquiridos_id')->references('id')->on('paquete_adquiridos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dispositivo_id')->references('id')->on('dispositivos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dispositivo_asignados');
    }
}

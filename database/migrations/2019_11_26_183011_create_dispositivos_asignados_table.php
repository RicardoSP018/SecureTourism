<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDispositivosAsignadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos_asignados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('Inicio')->nullable();
            $table->date('Final')->nullable();
            $table->integer('dispositivo_id')->unsigned();
            $table->integer('paqueteAd_id')->unsigned();
            $table->foreign('paqueteAd_id')->references('id')->on('paquetes_adquiridos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dispositivo_id')->references('id')->on('Dispositivos')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dispositivos_asignados');
    }
}

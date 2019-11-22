<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionesAsignadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promociones_asignadas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('paquete_id')->unsigned();
            $table->integer('promocion_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('Paquetes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promocion_id')->references('id')->on('Promociones')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promociones_asignadas');
    }
}

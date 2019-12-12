<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromocionAsignadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocion_asignadas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('paquete_id')->unsigned();
            $table->integer('promocion_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promocion_id')->references('id')->on('promocions')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promocion_asignadas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaquetesAdquiridosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes_adquiridos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->string('precio')->nullable();
            $table->integer('turista_id')->unsigned();
            $table->integer('paquete_id')->unsigned();
            $table->foreign('turista_id')->references('id')->on('Turistas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paquete_id')->references('id')->on('Paquetes')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paquetes_adquiridos');
    }
}

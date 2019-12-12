<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaqueteAdquiridosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_adquiridos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->string('precio')->nullable();
            $table->integer('turista_id')->unsigned();
            $table->integer('paquete_id')->unsigned();
            $table->foreign('turista_id')->references('id')->on('turistas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('paquete_id')->references('id')->on('paquetes')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paquete_adquiridos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->integer('edad')->nullable();
            $table->string('genero');
            $table->string('precio')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guias');
    }
}

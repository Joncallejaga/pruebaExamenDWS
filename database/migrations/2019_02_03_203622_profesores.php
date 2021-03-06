<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('profesores');
        Schema::create('profesores',function(Blueprint $table){
            $table->increments('id', 3);
            $table->string('departamento', 20);
            $table->unsignedInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('user')->onDelete('cascade');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('alumnos');
        Schema::create('alumnos',function(Blueprint $table){
            $table->increments('id', 3);
            $table->string('nombre', 20);
            $table->unsignedInteger('id_profesor')->unsigned();
            $table->foreign('id_profesor', 20)->references('id')->on('profesores')->onDelete('cascade');
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
        Schema::dropIfExists('alumno');
        
    }
}

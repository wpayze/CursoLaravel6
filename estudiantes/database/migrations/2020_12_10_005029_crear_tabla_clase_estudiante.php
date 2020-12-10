<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaClaseEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase_estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("clase_id");
            $table->unsignedBigInteger("estudiante_id");

            $table->foreign("clase_id")->references("id")->on("clases");
            $table->foreign("estudiante_id")->references("id")->on("estudiantes");

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
        Schema::dropIfExists('clase_estudiante');
    }
}

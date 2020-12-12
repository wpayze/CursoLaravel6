<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAlquileres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquileres', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("lector_id");
            $table->foreign("lector_id")->references("id")->on("lectores");

            $table->unsignedBigInteger("libro_id");
            $table->foreign("libro_id")->references("id")->on("libros");

            $table->date("fecha_salida");
            $table->date("fecha_entrada");
            
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
        Schema::dropIfExists('alquileres');
    }
}

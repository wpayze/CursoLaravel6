<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestaResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_responses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("encuesta_id");
            $table->foreign("encuesta_id")->references("id")->on("encuestas");

            $table->unsignedBigInteger("pregunta_id");
            $table->foreign("pregunta_id")->references("id")->on("preguntas");

            $table->unsignedBigInteger("respuesta_id");
            $table->foreign("respuesta_id")->references("id")->on("respuestas");

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
        Schema::dropIfExists('encuesta_responses');
    }
}

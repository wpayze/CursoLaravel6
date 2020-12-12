<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger("autor_id");
            $table->foreign("autor_id")->references("id")->on("autores");

            $table->unsignedBigInteger("categoria_id");
            $table->foreign("categoria_id")->references("id")->on("categorias");

            $table->unsignedBigInteger("editorial_id");
            $table->foreign("editorial_id")->references("id")->on("editoriales");

            $table->string("titulo");
            $table->date("fecha_lanzamiento");
            $table->string("idioma");
            $table->integer("paginas");
            $table->string("descripcion");

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
        Schema::dropIfExists('libros');
    }
}

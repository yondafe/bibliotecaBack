<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivroMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livrotabela', function (Blueprint $table) {
            $table->id();
            $table->string('autores');
            $table->string('titulo')->nullable();
            $table->string('editora')->nullable();
            $table->bigInteger('ano')->nullable();
            $table->string('idioma')->nullable();
            $table->bigInteger('totPag')->nullable();
            $table->string('genero')->nullable();
            $table->string('categoria')->nullable();
            $table->text('imagem')->nullable();
            $table->string('sinopse')->nullable();
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
        Schema::dropIfExists('livrotabela');
    }
}

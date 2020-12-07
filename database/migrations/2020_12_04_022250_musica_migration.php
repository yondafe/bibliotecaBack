<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MusicaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicatabela', function (Blueprint $table) {
            $table->id();
            $table->string('nomeAlbum');
            $table->string('cantor')->nullable();
            $table->bigInteger('anoAlbum')->nullable();
            $table->bigInteger('qFaixa')->nullable();
            $table->string('material')->nullable();
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
        Schema::dropIfExists('musicatabela');
    }
}

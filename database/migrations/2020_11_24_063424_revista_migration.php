<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RevistaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revistatabela', function (Blueprint $table) {
            $table->id();
            $table->string('revista');
            $table->string('titulo')->nullable();
            $table->string('edicao')->nullable();
            $table->bigInteger('totPag')->nullable();
            $table->string('editora')->nullable();
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
        Schema::dropIfExists('revistatabela');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JornalMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornaltabela', function (Blueprint $table) {
            $table->id();
            $table->string('editora');
            $table->string('data')->nullable();
            $table->bigInteger('edicao')->nullable();
            $table->string('cidade')->nullable();
            $table->string('site')->nullable();
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
        Schema::dropIfExists('jornaltabela');
    }
}

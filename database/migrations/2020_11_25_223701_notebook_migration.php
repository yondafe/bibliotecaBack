<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NotebookMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooktabela', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('marca');
            $table->string('modelo');
            $table->string('processador')->nullable();
            $table->string('ram')->nullable();
            $table->string('hd')->nullable();
            $table->string('so')->nullable();
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
        Schema::dropIfExists('notebooktabela');
    }
}

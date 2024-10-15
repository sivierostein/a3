<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formandos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',200);
            $table->integer('ano');
            $table->tinyInteger('semestre');
            $table->date('data_colacao');
            $table->unsignedInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formandos');
    }
};

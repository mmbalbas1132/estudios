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
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pregunta', 255)->nullable(false);
            $table->string('respuesta', 255)->nullable(true);

            // Añadir el campo de clave foránea 'tema_id'
            $table->unsignedBigInteger('tema_id');

            // Establecer la relación de clave foránea con la tabla 'temas'
            $table->foreign('tema_id')->references('id')->on('temas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preguntas');
    }
};

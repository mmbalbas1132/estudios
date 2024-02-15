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
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('respuesta', 255)->nullable(false);
            $table->boolean('es_correcta')->default(false);

            // Añadir el campo de clave foránea 'pregunta_id'
            $table->unsignedBigInteger('pregunta_id');

            // Establecer la relación de clave foránea con la tabla 'preguntas'
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestas');
    }
};

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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 100)->nullable(false);
            $table->string('descripcion', 255)->nullable(false);

            // Añadir el campo de clave foránea 'asignatura_id'
            $table->unsignedBigInteger('asignatura_id');

            // Establecer la relación de clave foránea con la tabla 'asignaturas'
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas');
    }
};

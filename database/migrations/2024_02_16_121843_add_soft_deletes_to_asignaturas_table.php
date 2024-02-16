<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('asignaturas', function (Blueprint $table) {
            $table->softDeletes(); // Añade esta línea
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('asignaturas', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Añade esta línea para revertir el cambio
        });
    }

};

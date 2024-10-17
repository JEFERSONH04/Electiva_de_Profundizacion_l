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
        Schema::create('monitoreo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_estudiantes')->unsigned();
            $table->bigInteger('id_ofertaspracticas')->unsigned();
            $table->text('tutor_empresa');
            $table->text('tutor_academico');
            $table->text('reporte_progreso');
            $table->text('evaluacion_final');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoreo');
    }
};

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
        Schema::table('empresas', function (Blueprint $table) {
            $table->string('nombre')->defaul('NaN')->change();
            $table->bigInteger('nit')->defaul('NaN')->change();
            $table->string('direccion')->defaul('NaN')->change();
            $table->bigInteger('telefono')->defaul('NaN')->change();
            $table->string('email')->defaul('NaN')->change();
            $table->string('ciudad')->defaul('NaN')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empresas', function (Blueprint $table) {
            //
        });
    }
};

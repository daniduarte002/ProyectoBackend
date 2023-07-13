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
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Tipo_Identificacion');
            $table->string('Numero_Identificacion');
            $table->string('Telefono');
            $table->string('Email');
            $table->string('Profesion');
            $table->string('Rol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
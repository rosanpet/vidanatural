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
        Schema::create('nuevo-patrocinados', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->string('whatsapp-codigo-pais');
            $table->string('numero-telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('patrocinador');
            $table->string('id-condicion-fiscal');
            $table->string('id-provincia');
            $table->string('id-localidad');
            $table->string('codigo-postal');
            $table->string('cuit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nuevo-patrocinados');
    }
};

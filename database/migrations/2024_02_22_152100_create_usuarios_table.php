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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario'); // llave primaria
            $table->string('nombre');   // atributos
            $table->string('apellido'); // atributos
            $table->string('identificacion_carnet'); // atributos
            $table->timestamps(); // crea la columna created_at(registro de la fecha de creacion) y update_at(registro de la fecha modificado el atributo)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

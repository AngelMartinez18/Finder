<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_candidato', true);
            $table->unsignedBigInteger('id_usuario')->unique();

            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('ubicacion')->index();
            $table->string('telefono')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->enum('visibilidad_cv', ['publico', 'privado', 'solo_empresas'])->default('solo_empresas');

            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');

            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');

            $table->string('telefono')->nullable();
            $table->enum('tipo_usuario', ['empresario', 'candidato', 'admin'])->default('candidato')->index();

            $table->boolean('visibilidad_perfil')->default(true);
            $table->boolean('terminos_aceptados')->default(false);

            $table->timestamp('email_verified_at')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};


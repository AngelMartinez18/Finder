<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('empleadores', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empleador', true);

            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_empresa');

            $table->enum('rol_empresa', ['Dueño', 'RRHH', 'Reclutador'])->default('Reclutador');

            $table->timestamps();

            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->cascadeOnDelete();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleadores');
    }
};

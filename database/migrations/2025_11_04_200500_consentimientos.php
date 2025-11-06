<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('consentimientos', function (Blueprint $table) {
        $table->unsignedBigInteger('id_consentimiento', true);
        $table->unsignedBigInteger('id_usuario');

        $table->enum('tipo',['datos','contacto','publicidad']);
        $table->boolean('aceptado');
        $table->timestamp('fecha')->useCurrent();

        $table->timestamps();

        $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->cascadeOnDelete();
    });
}

public function down()
{
    Schema::dropIfExists('consentimientos');
}

};

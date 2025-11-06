<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('ofertas', function (Blueprint $table) {
        $table->unsignedBigInteger('id_oferta', true);
        $table->unsignedBigInteger('id_empresa');

        $table->string('titulo');
        $table->text('descripcion');
        $table->text('requisitos')->nullable();
        $table->decimal('salario',10,2)->nullable();
        $table->string('ubicacion')->index();
        $table->string('tipo_contrato')->nullable();
        $table->timestamp('fecha_publicacion')->useCurrent();
        $table->timestamp('fecha_cierre')->nullable();
        $table->enum('estado',['activa','cerrada','pausada'])->default('activa');

        $table->timestamps();

        $table->foreign('id_empresa')->references('id_empresa')->on('empresas')->cascadeOnDelete();
    });
}

public function down()
{
    Schema::dropIfExists('ofertas');
}

};

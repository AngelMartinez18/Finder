<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('experiencias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_experiencia', true);
            $table->unsignedBigInteger('id_candidato');

            $table->string('cargo');
            $table->string('empresa');
            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();
            $table->text('descripcion')->nullable();

            $table->timestamps();

            $table->foreign('id_candidato')->references('id_candidato')->on('candidatos')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('experiencias');
    }
};

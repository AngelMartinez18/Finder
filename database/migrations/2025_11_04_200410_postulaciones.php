<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('postulaciones', function (Blueprint $table) {
            $table->unsignedBigInteger('id_postulacion', true);
            $table->unsignedBigInteger('id_candidato');
            $table->unsignedBigInteger('id_oferta');

            $table->timestamp('fecha_postulacion')->useCurrent();
            $table->text('carta_presentacion')->nullable();
            $table->string('cv_adj')->nullable();
            $table->enum('estado', ['enviada', 'revision', 'entrevista', 'oferta', 'declinada', 'rechazada'])->default('enviada');

            $table->timestamps();

            $table->foreign('id_candidato')->references('id_candidato')->on('candidatos')->cascadeOnDelete();
            $table->foreign('id_oferta')->references('id_oferta')->on('ofertas')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postulaciones');
    }
};

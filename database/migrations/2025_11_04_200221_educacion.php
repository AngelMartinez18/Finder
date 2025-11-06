<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('educaciones', function (Blueprint $table) {
            $table->unsignedBigInteger('id_educacion', true);
            $table->unsignedBigInteger('id_candidato');

            $table->string('institucion');
            $table->string('titulo');

            $table->enum('nivel', [
                'secundaria',
                'tecnico',
                'universidad',
                'pregrado',
                'posgrado',
                'doctorado'
            ])->default('universidad');

            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();

            $table->text('descripcion')->nullable();

            $table->timestamps();

            $table->foreign('id_candidato')
                ->references('id_candidato')
                ->on('candidatos')
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('educaciones');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('candidato_habilidad', function (Blueprint $table) {
        $table->unsignedBigInteger('id_candidato');
        $table->unsignedBigInteger('id_habilidad');
        $table->tinyInteger('nivel')->default(3);

        $table->primary(['id_candidato','id_habilidad']);

        $table->foreign('id_candidato')->references('id_candidato')->on('candidatos')->cascadeOnDelete();
        $table->foreign('id_habilidad')->references('id_habilidad')->on('habilidades')->cascadeOnDelete();
    });
}

public function down()
{
    Schema::dropIfExists('candidato_habilidad');
}

};

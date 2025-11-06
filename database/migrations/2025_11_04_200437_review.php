<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('reviews', function (Blueprint $table) {
        $table->unsignedBigInteger('id_review', true);
        $table->unsignedBigInteger('id_candidato');
        $table->unsignedBigInteger('id_empresa');

        $table->tinyInteger('rating');
        $table->text('comentario')->nullable();
        $table->timestamp('fecha')->useCurrent();

        $table->timestamps();

        $table->foreign('id_candidato')->references('id_candidato')->on('candidatos')->cascadeOnDelete();
        $table->foreign('id_empresa')->references('id_empresa')->on('empresas')->cascadeOnDelete();
    });
}

public function down()
{
    Schema::dropIfExists('reviews');
}

};

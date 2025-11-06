<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('job_search_index', function (Blueprint $table) {
            $table->unsignedBigInteger('id_candidato')->primary();
            $table->text('search_blob');
            $table->timestamp('updated_at')->useCurrent();

            $table->foreign('id_candidato')->references('id_candidato')->on('candidatos')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_search_index');
    }
};

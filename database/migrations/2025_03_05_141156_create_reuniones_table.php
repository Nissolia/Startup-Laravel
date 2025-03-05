<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reunions', function (Blueprint $table) {
            $table->bigIncrements('ìd');
            // id de persona cuando pida la reunion
            $table->unsignedBigInteger('agendas_id');
            $table->unsignedBigInteger('salas_id');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('agendas_id')->references('id')->on('agendas');
            $table->foreign('salas_id')->references('id')->on('salas');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reuniones');
    }
};

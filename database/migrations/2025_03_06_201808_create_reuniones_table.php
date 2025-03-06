<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {Schema::create('reunions', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('cliente_id');
        $table->unsignedBigInteger('sala_id');
        $table->date('fecha');
        $table->timestamps();
    
        // Claves foráneas (si es necesario)
        $table->foreign('cliente_id')->references('id')->on('clientes');
        $table->foreign('sala_id')->references('id')->on('salas');
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

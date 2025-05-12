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
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servidores_id'); // Adicionado
            $table->string('resposta');
            $table->string('marcado_como');
            $table->timestamps();

            // Se desejar, adicione a constraint de chave estrangeira
            $table->foreign('servidores_id')->references('id')->on('servidores')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};
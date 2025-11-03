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
        Schema::create('pilares', function (Blueprint $table) { // Alterado de 'formularios' para 'pilares'
            $table->id();
            $table->integer('pilar_1')->nullable(); // Alterado de 'answer_1' para 'pilar_1'
            $table->integer('pilar_2')->nullable(); // Alterado de 'answer_2' para 'pilar_2'
            $table->integer('pilar_3')->nullable(); // Alterado de 'answer_3' para 'pilar_3'
            $table->integer('pilar_4')->nullable(); // Alterado de 'answer_4' para 'pilar_4'
            $table->integer('pilar_5')->nullable(); // Alterado de 'answer_5' para 'pilar_5'
            $table->integer('pilar_6')->nullable(); // Alterado de 'answer_6' para 'pilar_6'
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilares'); // Alterado de 'formularios' para 'pilares'
    }
};
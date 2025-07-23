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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            //Relacionamento com formulario Escolhido
            $table->foreignId('formulario_id')->constrained('formularios')->onDelete('cascade');
            //Relaciona com o usuario que deu o feecback
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->boolean('confirm');

            $table->text('mensagem');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};

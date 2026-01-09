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
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            // ID do servidor que está respondendo
            $table->foreignId('servidor_id')->constrained('servidores')->onDelete('cascade');

            // ID da pergunta que está sendo respondida (sua tabela perguntas)
            $table->foreignId('pergunta_id')->constrained('perguntas')->onDelete('cascade');

            // O valor da resposta (ex: nota 1 a 5 ou texto)
            $table->string('valor');

            // Campos extras que você já usa no formulário
            $table->integer('classificacao_geral')->nullable(); // Nota 0-10
            $table->text('comentarios')->nullable(); // Sugestões

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
};

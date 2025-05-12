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
        Schema::table('servidores', function (Blueprint $table) {
            $table->unsignedBigInteger('orgao_id')->nullable(); // Se necessário, defina como nullable
            $table->foreign('orgao_id')->references('id')->on('orgaos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servidores', function (Blueprint $table) {
            $table->dropForeign(['orgao_id']);
            $table->dropColumn('orgao_id');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servidores_id');
            $table->integer('answer_1')->nullable();
            $table->integer('answer_2')->nullable();
            $table->integer('answer_3')->nullable();
            $table->integer('answer_4')->nullable();
            $table->integer('answer_5')->nullable();
            $table->string('answer_6')->nullable();
            $table->integer("classificate");
            $table->longText('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formularios');
    }
};

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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('estoque');
            $table->char('tamanho', 5);
            $table->date('data_registro');
            $table->foreignId('tipo_produto_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('user_id')->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->enum('status', ['on', 'off']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

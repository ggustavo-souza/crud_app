<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->text('descricao');
            $table->string('proprietario'); // 10 dígitos no total, 2 depois da vírgula
            $table->timestamps(); // Cria as colunas created_at e updated_at
            $table->string('foto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('imovels');
    }
};
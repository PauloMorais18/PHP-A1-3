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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('data')->nullable(false); // Campo data (obrigatório)
            $table->integer('quantidade_itens')->unsigned()->default(1); // Quantidade (inteiro positivo)
            $table->decimal('total', 10, 2)->nullable(false); // Total com 2 casas decimais
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
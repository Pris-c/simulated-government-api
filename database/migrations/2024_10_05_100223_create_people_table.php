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
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-increment, pk (bigint)
            $table->string('name', 100); // nome da entidade
            $table->string('nif', 9)->unique(); // nif unico, sem duplicacao
            $table->date('birthdate'); // data de nascimento
    
            $table->timestamps(); // atualizacao de criacoes ou edicoes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};

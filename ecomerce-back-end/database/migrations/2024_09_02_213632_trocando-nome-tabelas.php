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
        Schema::rename('estabelecimento','estabelecimentos');
        Schema::rename('produto','produtos');
        Schema::rename('categoria_produto','categoria_produtos');
        Schema::rename('categoria_estabelecimento','categorias_estabelecimentos');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

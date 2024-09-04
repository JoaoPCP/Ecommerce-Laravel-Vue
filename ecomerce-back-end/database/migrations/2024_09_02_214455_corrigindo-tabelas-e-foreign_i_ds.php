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
        Schema::table('estabelecimentos', function(Blueprint $table)
        {
            $table -> renameColumn('categoria_estabelecimento_id', 'categoria_estabelecimentos_id');
        });
        
        Schema::table('produtos', function(Blueprint $table)
        {
            $table -> renameColumn('categoria_produto_id', 'categoria_produtos_id');
            $table -> renameColumn('estabelecimento_id', 'estabelecimentos_id');
        });
        Schema::table('pedidos', function(Blueprint $table)
        {
            $table -> renameColumn('produto_id', 'produtos_id');
            $table -> renameColumn('estabelecimento_id', 'estabelecimentos_id');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

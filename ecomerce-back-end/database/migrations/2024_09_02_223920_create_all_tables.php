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
        Schema::create('categoria_estabelecimento', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('estabelecimento', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->foreignId('categoria_estabelecimento_id');
        });

        Schema::create('categoria_produto', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('valor', precision:2);
            $table->foreignId('categoria_produto_id');
            $table->foreignId('estabelecimento_id');
        });
        Schema::create('pedidos', function(Blueprint $table){
            $table->id();
            $table->foreignId('estabelecimento_id');
            $table->foreignId('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estabelecimento');
        Schema::dropIfExists('categoria_estabelecimento');
        Schema::dropIfExists('produto');
        Schema::dropIfExists('categoria_produto');
        Schema::dropIfExists('pedidos');
    }
};

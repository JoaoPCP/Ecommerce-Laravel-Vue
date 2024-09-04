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
        Schema::table("estabelecimentos", function (Blueprint $table) {
            $table->foreignId('categoria_estabelecimentos_id')->constrained();
        });
        Schema::table("produtos", function (Blueprint $table) {
            $table->foreignId('categoria_produtos_id')->constrained();
            $table->foreignId('estabelecimentos_id')->constrained();
        });
        Schema::table("pedidos", function (Blueprint $table) {
            $table->foreignId('estabelecimentos_id')->constrained();
            $table->foreignId('produtos_id')->constrained();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("estabelecimentos", function (Blueprint $table) {
            $table->foreignId('categoria_estabelecimentos_id')->constrained()->onDelete('cascade');
        });
        Schema::table("produtos", function (Blueprint $table) {
            $table->foreignId('categoria_produtos_id')->constrained()->onDelete('cascade');
            $table->foreignId('estabelecimentos_id')->constrained()->onDelete('cascade');
        });
        Schema::table("pedidos", function (Blueprint $table) {
            $table->foreignId('estabelecimentos_id')->constrained()->onDelete('cascade');
            $table->foreignId('produtos_id')->constrained()-> onDelete('cascade');
        });
        
    }
};

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
        Schema::table('produtos', function(Blueprint $table)
        {
            $table->timestamps();	
        });
        Schema::table('categoria_estabelecimentos', function(Blueprint $table)
        {
            $table->timestamps();	
        });
        Schema::table('categoria_produtos', function(Blueprint $table)
        {
            $table->timestamps();	
        });
        Schema::table('pedidos', function(Blueprint $table)
        {
            $table->timestamps();	
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

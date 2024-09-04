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
        Schema::create('categoria_estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->unsignedBigInteger('categoria_estabelecimentos_id');
            $table->foreign('categoria_estabelecimentos_id')
                ->references('id')
                ->on('categoria_estabelecimentos')
                ->onDelete('CASCADE');
            $table->timestamps();
        });

        Schema::create('categoria_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('valor', precision: 2);
            $table->unsignedBigInteger('categoria_produtos_id');
            $table->foreign('categoria_produtos_id')
                ->references('id')
                ->on('categoria_produtos')
                ->onDelete('CASCADE');
            $table->unsignedBigInteger('estabelecimentos_id');
            $table->foreign('estabelecimentos_id')
                ->references('id')
                ->on('estabelecimentos')
                ->onDelete('CASCADE');
            $table->timestamps();
        });
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estabelecimentos_id');
            $table->foreign('estabelecimentos_id')
                ->references('id')
                ->on('estabelecimentos')
                ->onDelete('CASCADE');
            $table->unsignedBigInteger('produtos_id');
            $table->foreign('produtos_id')
                ->references('id')
                ->on('produtos')
                ->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estabelecimentos');
        Schema::dropIfExists('categoria_estabelecimentos');
        Schema::dropIfExists('produtos');
        Schema::dropIfExists('categoria_produtos');
        Schema::dropIfExists('pedidos');
    }
};

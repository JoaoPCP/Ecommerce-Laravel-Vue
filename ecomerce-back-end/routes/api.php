<?php

use App\Http\Controllers\CategoriaEstabelecimentoController;
use App\Http\Controllers\CategoriaProdutoController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/categoria_estabelecimentos', CategoriaEstabelecimentoController::class);
Route::apiResource('/categoria_produtos', CategoriaProdutoController::class);
Route::apiResource('/estabelecimentos', EstabelecimentoController::class);
Route::apiResource('/produtos', ProdutoController::class);
Route::apiResource('/pedidos', PedidoController::class);
Route::get('/produtos/filter/{categoria_produtos_id}', [ProdutoController::class, 'filter']);
Route::get('/estabelecimentos/filter/{categoria_estabelecimentos_id}', [EstabelecimentoController::class, 'filter']);
Route::get('/estabelecimentos/{id}/pedidos', [EstabelecimentoController::class, 'pedidos']);

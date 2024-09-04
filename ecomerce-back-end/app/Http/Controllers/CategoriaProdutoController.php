<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaProdutoRequest;
use App\Http\Resources\CategoriaProdutosResource;
use App\Models\CategoriaProduto;
use Illuminate\Http\Request;

class CategoriaProdutoController extends Controller
{
    public function index()
    {
        $categoria = CategoriaProduto::all();
        return CategoriaProdutosResource::collection($categoria);
    }


    public function store(StoreCategoriaProdutoRequest $request)
    {
        $data = $request->validated();
        $categoria =  CategoriaProduto::create($data);
        return $categoria;
    }

    public function show(int $id)
    {
        $categoria = CategoriaProduto::findOrFail($id);
        $categoria->load('produtos');
        return new CategoriaProdutosResource($categoria);
    }
}

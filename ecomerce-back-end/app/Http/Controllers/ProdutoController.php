<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateprodutoRequest;
use App\Http\Resources\ProdutoResource;
use App\Models\CategoriaProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }
    public function store(StoreUpdateprodutoRequest $request)
    {
        $data = $request->validated();
        $produto = new Produto();
        $produto->fill($data);
        $produto->categoria_produtos_id = $data["categoria_produtos_id"];
        $produto->estabelecimentos_id = $data["estabelecimentos_id"];
        //$categoria = CategoriaProduto::find($data["categoria_produtos_id"]);
        // $categoria->produtos()->$produto;
        // $categoria->save();
        $produto->save();
        return $produto;
    }
    public function show($id)
    {
        $produto = Produto::findorFail($id);
        return new ProdutoResource($produto);
    }
    public function filter($categoria_id)
    {
        $produtos = Produto::where("categoria_produtos_id", $categoria_id)->get();
        return $produtos;
    }
}

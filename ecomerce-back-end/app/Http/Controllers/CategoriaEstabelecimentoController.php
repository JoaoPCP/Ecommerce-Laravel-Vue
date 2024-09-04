<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaEstabelecimentoRequest;
use App\Http\Resources\CategoriaEstabelecimentoResource;
use App\Models\CategoriaEstabelecimento;
use Illuminate\Http\Request;

class CategoriaEstabelecimentoController extends Controller
{
    public function index()
    {
        $categoria = CategoriaEstabelecimento::all();
        return CategoriaEstabelecimentoResource::collection($categoria);
    }

    public function store(StoreCategoriaEstabelecimentoRequest $request)
    {
        $data = $request->validated();
        $categoria = CategoriaEstabelecimento::create($data);
        return new CategoriaEstabelecimentoResource($categoria);
    }
}

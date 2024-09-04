<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateEstabelicimentoRequest;
use App\Http\Resources\EstabelecimentoResource;
use App\Http\Resources\PedidoResource;
use App\Models\CategoriaEstabelecimento;
use App\Models\Estabelecimento;
use App\Models\Pedido;
use Illuminate\Http\Request;

class EstabelecimentoController extends Controller
{
    public function index()
    {
        $estabelecimento = Estabelecimento::all();
        return EstabelecimentoResource::collection($estabelecimento);
    }

    public function store(StoreUpdateEstabelicimentoRequest $request)
    {
        $data = $request->validated();
        $estabelecimento = new Estabelecimento();
        $estabelecimento->fill($data);
        $estabelecimento->endereco = $data["endereco"];
        $estabelecimento->categoria_estabelecimentos_id = $data["categoria_estabelecimentos_id"];
        $estabelecimento->save();

        return new EstabelecimentoResource($estabelecimento);
    }
    public function show(int $id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);
        return new EstabelecimentoResource($estabelecimento);
    }
    public function filter(int $categoria_id)
    {
        $estabelecimento = Estabelecimento::where("categoria_estabelecimentos_id", $categoria_id)->get();
        return EstabelecimentoResource::collection($estabelecimento);
    }
    public function pedidos(int $id)
    {
        $pedidos = Pedido::where("estabelecimentos_id", $id)->get();
        return PedidoResource::collection($pedidos);
    }
}

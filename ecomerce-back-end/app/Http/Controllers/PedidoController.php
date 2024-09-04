<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedidoRequest;
use App\Http\Resources\PedidoResource;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedido = Pedido::all();
        return PedidoResource::collection($pedido);
    }
    public function store(StorePedidoRequest $request)
    {
        $data = $request->validated();
        $pedido = new Pedido();
        $pedido->produtos_id = $data["produtos_id"];
        $pedido->estabelecimentos_id = $data["estabelecimentos_id"];
        $pedido->save();
        return new PedidoResource($pedido);
    }
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return new PedidoResource($pedido);
    }
}

<?php

namespace App\Http\Resources;

use App\Models\Estabelecimento;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PedidoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $produto = Produto::find($this->produtos_id);
        // $estabelecimento = Estabelecimento::find($this->estabelecimentos_id);
        return [
            "id" => $this->id,
            "produto" =>  Produto::find($this->produtos_id)->name,
            "estabelecimento" => Estabelecimento::find($this->estabelecimentos_id)->name
        ];
    }
}

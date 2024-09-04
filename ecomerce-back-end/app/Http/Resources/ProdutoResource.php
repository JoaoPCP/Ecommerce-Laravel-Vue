<?php

namespace App\Http\Resources;

use App\Models\CategoriaProduto;
use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "Nome" => $this->name,
            "Preço" => $this->valor,
            "Categoria" =>  CategoriaProduto::find($this->categoria_produtos_id)->name,
            "Estabelecimento" => Estabelecimento::find($this->estabelecimentos_id)->name,
        ];
    }
}

<?php

namespace App\Http\Resources;

use App\Models\CategoriaEstabelecimento;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EstabelecimentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $categoria = CategoriaEstabelecimento::find($this->categoria_estabelecimentos_id);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "descrição" => $this->description,
            "categoria" => $categoria->name,
            "endereco" => $this->endereco,
        ];
    }
}

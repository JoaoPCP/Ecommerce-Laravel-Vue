<?php

namespace App\Http\Resources;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaEstabelecimentoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'identify' => $this->id,
            'name' => $this->name,
            'Estabelecimentos' => EstabelecimentoResource::collection($this->whenLoaded('estabelecimentos')),
        ];
    }
}

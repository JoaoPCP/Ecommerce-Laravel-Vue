<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use app\Models\Pedido;

class Estabelecimento extends Model
{
    protected $table = "estabelecimentos";
    protected $fillabble = [
        'name',
        'description',
    ];
    protected $guarded = [
        'categoria_estabelecimentos_id',
        'endereco'
    ];

    public function categoria(): HasOne
    {
        return $this->hasOne(CategoriaEstabelecimento::class);
    }
    public function produtos(): BelongsToMany
    {
        return $this->belongsToMany(Produto::class);
    }
    public function pedidos(): BelongsToMany
    {
        return $this->belongsToMany(Pedido::class);
    }
}

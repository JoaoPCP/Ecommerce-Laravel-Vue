<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pedido extends Model
{
    protected $guarded = [
        'estabelecimentos_id',
        'produtos_id'
    ];
    public function produto(): HasOne
    {
        return $this->hasOne(Pedido::class);
    }

    public function estabelecimento(): HasOne
    {
        return $this->hasOne(Estabelecimento::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Produto extends Model
{
    protected $fillable = [
        'name',
        'valor',
    ];

    protected $guarded = [
        'categoria_produtos_id',
        'estabelecimentos_id'
    ];

    public function estabelecimento(): HasOne
    {
        return $this->hasOne(Estabelecimento::class);
    }
    public function categoria(): HasOne
    {
        return $this->hasOne(CategoriaProduto::class);
    }
}

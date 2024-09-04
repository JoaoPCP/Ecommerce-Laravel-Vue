<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriaProduto extends Model
{
    protected $fillable = [
        'name'
    ];

    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }
}

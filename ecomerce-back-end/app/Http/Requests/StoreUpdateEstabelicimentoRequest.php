<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEstabelicimentoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
        'name'=> 'required|unique:estabelecimentos|max:50',
        'description' => 'required|max:200',
        'categoria_estabelecimentos_id' => 'required'
        ];

        return $rules;
    }
}

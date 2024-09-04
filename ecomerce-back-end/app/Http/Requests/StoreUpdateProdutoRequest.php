<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateprodutoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
        'name' => 'required',
        'valor' => 'required',
        'categoria_produtos_id' => 'required',
        'estabelecimentos_id'=> 'required',

        ];
        return $rules;
    }
}

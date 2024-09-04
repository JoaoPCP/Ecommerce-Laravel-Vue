<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePedidoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        
        return [
            'produtos_id'=>'required',
            'estabelecimentos_id' =>'required'
        ];
    }
}

<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class MedicamentsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
  
    public function rules():array
    {
        return [
            'name' => 'required|string|max:60',
            'date' => 'required|date',
            'ml' => 'required|string|max:5',
            'repeat' => 'required|string|max:1',
            'id_pet' => 'required'
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'date.required' => 'O campo data de nascimento é obrigatório.',
            'date.date' => 'O campo data de nascimento deve ser uma data válida.',
            'ml.required' => 'O campo ml é obrigatório.',
            'ml.string' => 'O campo  da ml deve ser uma string.',
            'ml.max' => 'O campo ml não pode ter mais de :max caracteres.',
            'repeat.required' => 'O campo repetir é obrigatório.',
            'repeat.string' => 'O campo repetir deve ser uma string.',
            'repeat.max' => 'O campo repetir pode ter mais de :max caracteres.',
            'id_pet' => 'O pet é obrigatório'
        ];
    }



}

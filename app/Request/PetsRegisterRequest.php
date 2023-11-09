<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;
use Hyperf\Validation\ValidationException;
use Hyperf\Validation\Validator;

class PetsRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'name' => 'required|string|max:60',
            'birth_date' => 'required|date',
            'size' => 'required|string|max:20',
            'sex' => 'required|string|max:12',
            'id_breed' => 'required',
            'id_category' => 'required',
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'birth_date.required' => 'O campo data de nascimento é obrigatório.',
            'birth_date.date' => 'O campo data de nascimento deve ser uma data válida.',
            'size.required' => 'O campo tamanho é obrigatório.',
            'size.string' => 'O campo tamanho deve ser uma string.',
            'size.max' => 'O campo tamanho não pode ter mais de :max caracteres.',
            'id_breed.required' => 'O campo raça é obrigatório.',
            'id_category.required' => 'O campo senha é obrigatório.',
            'sex.required' => 'O campo tamanho é obrigatório.',
            'sex.string' => 'O campo tamanho deve ser uma string.',
            'sex.max' => 'O campo tamanho não pode ter mais de :max caracteres.',
        ];
    }



}

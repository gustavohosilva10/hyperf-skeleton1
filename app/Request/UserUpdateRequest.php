<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class UserUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'name' => 'required|string|max:60',
            'email' => 'required|email|max:60',
            'document' => 'required|string|max:20',
            'cellphone' => 'required|string|max:20',
            //'password' => 'required|string|min:8',
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome não pode ter mais de :max caracteres.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido.',
            'document.required' => 'O campo documento é obrigatório.',
            'document.string' => 'O campo documento deve ser uma string.',
            'document.max' => 'O campo documento não pode ter mais de :max caracteres.',
            'cellphone.required' => 'O campo celular é obrigatório.',
            'cellphone.string' => 'O campo celular deve ser uma string.',
            'cellphone.max' => 'O campo celular não pode ter mais de :max caracteres.',
        ];
    }



}

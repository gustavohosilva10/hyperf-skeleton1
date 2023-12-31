<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;
use Hyperf\Validation\ValidationException;
use Hyperf\Validation\Validator;

class HistoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules():array
    {
        return [
            'id_pet' => 'required|string',
            'address' => 'required|string|max:160',
            'cep' => 'required|string|max:12',
        ];
    }

    public function messages():array
    {
        return [
            'id_pet.required' => 'O campo id_pet é obrigatório.',
            'address.required' => 'O campo endereço é obrigatório.',
            'cep.required' => 'O campo cep é obrigatório.',
        ];
    }

}

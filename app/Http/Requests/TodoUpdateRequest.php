<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['string'],
            'text' => ['string'],
            'is_completed' => ['bool']
        ];
    }

    public function messages(): array
    {
        return [
            'title.string' => 'Поле title должно быть строкой',
            'text.string' => 'Поле text должно быть строкой',
            'is_completed' => 'Поле is_completed должно быть булевым',
        ];
    }
}

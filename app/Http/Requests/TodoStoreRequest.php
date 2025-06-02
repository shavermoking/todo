<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'text' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Поле title обязательно для заполнения',
            'title.string' => 'Поле title должно быть строкой',
            'text.required' => 'Поле text обязательно для заполнения',
            'text.string' => 'Поле text должно быть строкой'
        ];
    }
}

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
}

<?php

namespace App\Http\Requests\Profile\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'message' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'message.required' => 'Поле не может быть пустым',
            'message.string' => 'Только строчные символы',
        ];
    }
}

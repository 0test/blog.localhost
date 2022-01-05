<?php

namespace App\Http\Requests\Admin\Category;

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
            'title' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле не может быть пустым',
            'title.string' => 'Только строчные символы',
        ];
    }
}

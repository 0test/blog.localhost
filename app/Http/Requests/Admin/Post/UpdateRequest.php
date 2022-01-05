<?php

namespace App\Http\Requests\Admin\Post;

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
            'content' => 'required',
            'main_image' => 'nullable|image',
            'preview_image' => 'nullable|image',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле не может быть пустым',
            'title.string' => 'Только строчные символы',
            'content.required' => 'Нужен контент',
            'main_image.required' => 'Выберите изображение',
            'preview_image.required' => 'Выберите изображение',
        ];
    }
}

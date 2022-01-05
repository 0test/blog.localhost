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
            'category_id' => 'required|integer|exists:categories,id',
            'tags' => 'required|array',
            'tags.*'  => 'required|integer|exists:tags,id',
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
            'main_image.image' => 'Выберите изображение',
            'preview_image.image' => 'Выберите изображение', 
            'category_id.required' => 'Поле не может быть пустым',
            'category_id.exists' => 'Категории не существует',
            'category_id.integer' => 'Категория неверная',
            'tags.*.exists' => 'Тега не существует',
            'tags.required' => 'Нужен хотя бы один тег',
        ];
    }
}

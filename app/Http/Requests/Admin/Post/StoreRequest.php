<?php
namespace App\Http\Requests\Admin\Post;
use Illuminate\Foundation\Http\FormRequest;
class StoreRequest extends FormRequest
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
            'main_image' => 'required|image',
            'preview_image' => 'required|image',
            'category_id' => 'required|integer|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*'  => 'nullable|integer|exists:tags,id',
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
            'category_id.required' => 'Поле не может быть пустым',
            'category_id.exists' => 'Категории не существует',
            'tags.exists' => 'Тега не существует',
        ];
    }
}

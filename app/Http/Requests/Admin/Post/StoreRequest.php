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
            'main_image' => '',
            'preview_image' => '',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Поле не может быть пустым',
            'title.string' => 'Только строчные символы',
            'content.required' => 'Нужен контент',
        ];
    }
}

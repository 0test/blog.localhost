<?php

namespace App\Http\Requests\Admin\User;
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
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Имя не может быть пустым',
            'name.string' => 'Только строчные символы',
            'email.required' => 'Почта нужна обязательно',
            'email.email' => 'Почта неверная',
            'email.string' => 'Почта неверная',
            'password.required'=> 'Пароль сильно нужен',

        ];
    }
}

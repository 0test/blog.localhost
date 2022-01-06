<?php

namespace App\Http\Requests\Admin\User;

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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'password' => 'nullable|string',
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
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
            'email.unique' => 'Такая почта есть',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest1 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'email' => 'required|email|min:10',
                'password' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'e-mail address'
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Введите пароль'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'name_' => 'required',
            'email_' => 'required|email|unique:users,email',
            'phone_' => 'required|unique:users,phone|numeric|digits:10',
            'password_' => 'required|required_with:confirm-password|same:confirm-password',
            'confirm-password' => 'required',
        ];
    }
}

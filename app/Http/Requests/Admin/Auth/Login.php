<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ];
    }
    public function messages(){
        return [
            'email.required'     => 'البريد الالكتروني مطلوب ',
            'password.required'     => 'كلمه المرور يجب مطلوبه',
            'email.email'     => 'البريد الالكتروني غير صحيح',
            'password.min'     => 'كلمه المرور يجب ان لا تقل عن 6 حروف/ارقام',
        ];
    }

}

<?php

namespace App\Http\Requests\Admin\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Update extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'avatar'   => 'nullable|image',
            'name'     => 'required|max:191|min:4',
            'phone'    => "required|min:9|unique:admins,phone," . $this->id,
            'email'    => "required|email|max:191|unique:admins,email," . $this->id,
            'password' => 'nullable|min:6|max:255',
        ];
    }

    public function messages(){
        return [
            'name.required'     => 'الاسم مطلوب',
            'name.min'     => 'يجب أن يكون طول النص للاسم على الاقل 4 حروف',
            'name.max'     => 'يجب أن يكون طول النص للاسم لا يزيد 191 حرف',
            'phone.required'     => 'الهاتف  مطلوب',
            'phone.min'     => 'يجب ان لايقل رقم الهاتف عن 9 ارقام ',
            'phone.unique'     => 'الهاتف  مستخدم من قبل  ',
            'email.required'     => 'البريد الالكتروني مطلوب',
            'email.email'     => 'صيغه البريد الالكتروني غير صحيحه ',
            'email.unique'     => 'البريد الاكتروني مستخدم من قبل',
            'password.min'     => 'يجب أن يكون طول النص للرقم السري  على الاقل 4 حروف',
        ];
    }

}

<?php

namespace App\Http\Requests\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
//        dd(5);
        return [
            'site_name' => 'required|min:4|max:191',
            'logo_header' => 'nullable|image|mimes:jpeg,png,jpg,svg',
            'logo_footer' => 'nullable|image|mimes:jpeg,png,jpg,svg',
            'video' => 'required|url',

            'about' => 'required',
            'services' => 'required',
            'majors' => 'required|max:200',
            'skills' => 'required|max:200',

            'condition' => 'required',

            'site_phone' =>  'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email',
            'instagram' => 'required|url',
            'facebook' =>  'required|url',
            'whatsapp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'youtube' => 'required|url',
        ];
    }
}

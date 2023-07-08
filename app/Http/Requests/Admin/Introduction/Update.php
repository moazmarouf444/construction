<?php

namespace App\Http\Requests\Admin\Introduction;

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
        return [
            'main_title'     => 'required|max:191|min:4',
            'sub_title'     => 'required|max:191|min:4',
            'description'     => 'required|min:4',
        ];
    }
}

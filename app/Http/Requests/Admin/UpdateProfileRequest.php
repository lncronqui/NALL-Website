<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => [
                'email',
                'required',
                Rule::unique('users')->ignore($this->user()->id, 'id')
            ],
            'institution_id' => 'required|exists:institutions,id',
            'password' => [
                'nullable'
            ],
            'confirm_password' => 'required_with:password|same:password'
        ];
    }
}

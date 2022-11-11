<?php

namespace App\Http\Requests\Admin\Overall;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'institution_id' => 'required|exists:institutions,id',
            'role_id' => 'required|exists:roles,id|integer|between:2,3',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ];
    }
}

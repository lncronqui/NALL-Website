<?php

namespace App\Http\Requests\Admin\Overall;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWebsiteInfoRequest extends FormRequest
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
            'id' => 'exists:website_info,id',
            'history' => 'required|string',
            'mission' => 'required|string',
            'vision' => 'required|string',
            'about' => 'required|string',
            'objectives' => 'required|string',
            'address_1' => 'required|string',
            'address_2' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required|string',
            'tel_number' => 'required|string',
            'email' => 'required|email',
            'fb_page' => 'required|url',
            'website' => 'required|url',
        ];
    }
}

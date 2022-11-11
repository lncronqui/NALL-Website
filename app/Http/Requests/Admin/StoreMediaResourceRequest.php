<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMediaResourceRequest extends FormRequest
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
            'resource_type_id' => 'required|exists:resource_types,id',
            'title' => 'required|unique:media_resources,title',
            'abstract' => 'required',
            'journal_id' => 'required_if:resource_type_id,1,2',
            'url' => 'required_unless:resource_type_id,1',
            'doi' => 'required_if:resource_type_id,2',
            'page' => 'required_if:resource_type_id,1,2',
            'date' => 'required|date|max:now',
            'access_type_id' => 'required|exists:access_types,id',
            'authorName' => 'required',
            'authorEmail' => 'required|email:filter'
        ];
    }
}

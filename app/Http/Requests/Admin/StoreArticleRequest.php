<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|unique:articles|string',
            'abstract' => 'required|string',
            'journal_title' => 'required|string|unique:articles',
            'url' => 'required|url',
            'doi' => 'required|url|unique:articles',
            'pub_type' => 'required|exists:pub_types,id',
            'page' => 'required|numeric',
            'date' => 'required|date',
        ];
    }
}

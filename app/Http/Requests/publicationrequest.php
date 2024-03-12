<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class publicationrequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'min:5|max:30',
            'body' => 'required|min:20|max:120',
            'image' => 'image|mimes:png,jpg,jpeg,svg|max:10240', // vaaleur KB 
        ];
    }
}

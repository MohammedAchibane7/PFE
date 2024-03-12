<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class recruteurrequest extends FormRequest
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
            'nom'=>'required|min:3|max:20',
           	'prenom'=>'required|min:3|max:20',
          	'CIN'=>'required|max:8',
           	'entreprise'=>'required|max:50',
            'logo' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
            'ville' => 'required|max:30',            
            'Description' => 'required|max:120',
           	'email'=>'required|email',
           	'password'=>'required|min:9|max:30|confirmed',
        ];
    }
}

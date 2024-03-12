<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class candidatrequest extends FormRequest
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
            'age'=>'required|integer|min:20|max:60',
            'adresse'=>'required|min:20|max:50',
            'CIN'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:9|max:30|confirmed',
            'image' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
            'Description' => 'required|max:120',
            'Departement' =>'required',
            'Niveau_etude'=>'required'       
         ];
    }
}

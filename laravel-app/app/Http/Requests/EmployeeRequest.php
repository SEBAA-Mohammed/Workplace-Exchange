<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'photo' => 'image|mimes:png,jpg,jpeg,svg|max:10240',
            'grade' => 'required',
            'date_naissance' => 'required',
            'date_recrutement' => 'required',
            'poste' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'password' => 'required',
            'occupation_id' => 'required',
            'establishment_id' => 'required',
        ];
    }
}

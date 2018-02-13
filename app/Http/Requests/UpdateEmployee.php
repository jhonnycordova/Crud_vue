<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'email'=>'required|unique:employees,email,'.$this->id.'|email'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El correo es requerido',
            'email.unique'  => 'El correo debe ser unico',
            'email.email'  => 'El formato del correo no es correcto'
        ];
    }

    public function authorize()
    {
        return true;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormValidationRequest extends FormRequest {

   public function attributes() {
        return [
            'nombre'     => 'nombre de usuario',
            'clave'  => 'contraseña'
        ];
    }

    public function authorize() {
        return true;
    }
    
    public function messages() {
        $required = 'El campo :attribute es obligatorio';
        $min      = 'La longitud mínima del campo :attribute es :min';
        $max      = 'La longitud máxima del campo :attribute es :max';
        return [
            'nombre.required'    => $required,
            'nombre.min'          => $min,
            'nombre.max'          => $max,
            'nombre.alpha'    => 'Los caracteres permitidos son alfabéticos.',
            'clave.required'     => $required,
            'clave.min'          => $min,
            'clave.max'          => $max,
        ];
    }

    public function rules() {
        return [
            'nombre' => 'required|min:3|max:20|alpha',
            'clave'  => 'required|min:6|max:10'
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginFormValidationRequest;

class LoginFormValidationController extends Controller {
    
    public function create() {
        return view('formulario.login');
    }

    public function store(LoginFormValidationRequest $request) {
        // $validatedData = $request->validate([
        //     'nombre' => 'required|min:3|max:20|alpha',
        //     'clave'  => 'required|min:6|max:10'
        // ]);
        $validatedData = $request->validated();
        
        $nombre = $request->input('nombre', 'pepe');
        $clave = $request->input('clave', 'pepe1234');
        if (strcasecmp($nombre, 'pepe') === 0 && strcasecmp($clave, 'pepe1234') === 0) {
            return redirect('successUser/'.$nombre)->with('nombre', $nombre);
        } else {
            $datos = [
                'errorMensaje' => 'Por favor, ingrese bien sus datos.'
            ];
            return view('formulario.login')->with($datos);
        }
        
    }
    
}

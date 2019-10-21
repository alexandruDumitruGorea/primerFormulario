<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    
    function forgotten() {
        return view('formulario.forgotten');
    }
    
    function forgottenPassword() {
        return redirect('inicio');
    }
    
    function success() {
        return view('formulario.user');
    }
}

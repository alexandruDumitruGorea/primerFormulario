<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller {
    
    function inicio() {
        return view('inicio');
    }
    
}

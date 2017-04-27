<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class seccion_productos extends Controller
{
    //
    public function mostrar(){
        return view('seccion_productos',[]);
    }
}

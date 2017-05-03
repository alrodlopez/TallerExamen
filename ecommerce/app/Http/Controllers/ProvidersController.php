<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    //
    public function listado()
     {
         $providers = Providers::All();
         return view('providers.listado',['providers'=> $providers]);
     }
    public function create()
    {
        return view('providers.create');
    }
     public function update()
     {

     }
     public function delete()
     {

     }
     public function show()
     {

     }
}

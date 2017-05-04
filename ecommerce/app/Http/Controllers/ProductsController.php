<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    //
    public function listAll()
    {
        $products = Products::All();
        return view('products.listado',['products'=> $products]);
    }
    public function create()
    {
        return view("products.create");
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

<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view("products.listado", ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product = new Product;
        return view("products.create",["product"=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product;
        $product->name =$request->name;
        $product->description =$request->description;
        $product->pricing =$request->pricing;
        $product->product_type_id =$request->product_type_id;
        $product->provider_id =$request->provider_id;
        $rules=array(
            'name'=>'required',
            'description'=>'required',
            'pricing'=>'required|numeric',
            'product_type_id'=>'required',
            'provider_type_id'=>'required',
        );
        $this->validate($request,$rules);
        if($product->save()){
            return redirect("/products");
        }else{
            return view("products.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view("products.edit",["product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->name =$request->name;
        $product->description =$request->description;
        $product->pricing =$request->pricing;
        $product->product_type_id =$request->product_type_id;
        $product->provider_id =$request->provider_id;
        $rules=array(
            'name'=>'required',
            'description'=>'required',
            'pricing'=>'required|numeric',
            'product_type_id'=>'required',
            'provider_type_id'=>'required',
        );
        $this->validate($request,$rules);
        if($product->save()){
            return redirect("/products");
        }else{
            //return view("products.edit");
            return view ("products/create",["product"=>$product]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::destroy($id);
        return redirect ('/products');
    }
}

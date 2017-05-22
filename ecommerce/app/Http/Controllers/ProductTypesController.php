<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use Illuminate\Support\Facades\Auth;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product_types = ProductType::all();
        return view("product_types.listado", ["product_types" => $product_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product_type = new ProductType;
        return view("product_types.create",["product_type"=>$product_type]);
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
        $product_type = new ProductType;

        $product_type->description =$request->description;
        $rules=array(

            'description'=>'required',

        );
        $this->validate($request,$rules);
        if($product_type->save()){
            return redirect("/product_types");
        }else{
            return view("product_types.create");
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
        $product_type = ProductType::find($id);
        return view("product_types.edit",["product_type"=>$product_type]);
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
        $product_type = ProductType::find($id);
        $product_type->description =$request->description;
        $rules=array(
            'description'=>'required',

        );
        $this->validate($request,$rules);
        if($product_type->save()){
            return redirect("/product_types");
        }else{
            //return view("product_types.edit");
            return view ("product_types/create",["product_types"=>$product_type]);
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
        ProductType::destroy($id);
        return redirect ('/product_types');
    }
}

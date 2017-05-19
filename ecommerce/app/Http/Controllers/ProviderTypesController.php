<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\ProviderTypes;

class ProviderTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provider_types = ProviderTypes::All();
        return view('provider_types.listado',['provider_types'=> $provider_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider_type=new ProviderTypes();
        return view('provider_types.create',["provider_type"=>$provider_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function providers(){
        return $this->hasMany('provider');
    }

    public function store(Request $request)
    {
        $provider_type=new ProviderTypes();
        $provider_type->name=$request->name;
        $provider_type->description=$request->description;
        $rules=array(
            'name'=>'required'

        );
        $this->validate($request,$rules);
        if($provider_type->save()){
            return redirect("/provider_types");
        }else{
            return view ("provider_types/create",["provider_type"=>$provider_type]);
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
        $provider_type=ProviderTypes::find($id);
        return view('provider_types.edit',["provider_type"=>$provider_type]);
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
        $provider_type=ProviderTypes::find($id);
        $provider_type->name=$request->name;
        $provider_type->description=$request->description;
        if($provider_type->save()){
            return redirect("/provider_types");
        }else{
            return view ("provider_types/create",["provider_type"=>$provider_type]);
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
        ProviderTypes::destroy($id);
        return redirect ('/provider_types');
    }
}

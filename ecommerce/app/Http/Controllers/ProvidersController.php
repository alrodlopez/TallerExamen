<?php

namespace App\Http\Controllers;

use App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Providers::All();
        return view('providers.listado',['providers'=> $providers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider=new Providers();
        return view('providers.create',["provider"=>$provider]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider=new Providers();
        $provider->name=$request->name;
        $provider->contact_name=$request->contact_name;
        $provider->address=$request->address;
        $provider->city=$request->city;
        $provider->phone=$request->phone;
        $provider->provider_type_id=$request->provider_type_id;
        $rules=array(
            'name'=>'required',
            'contact_name'=>'required',
            'phone'=>'required|numeric',
            'provider_type_id'=>'required',
        );
        $this->validate($request,$rules);
        if($provider->save()){
            return redirect("/providers");
        }else{
            return view ("providers/create",["provider"=>$provider]);
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
        $provider=Providers::find($id);
        return view('providers.edit',["provider"=>$provider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
*     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provider=Providers::find($id);
        $provider->name=$request->name;
        $provider->contact_name=$request->contact_name;
        $provider->address=$request->address;
        $provider->city=$request->city;
        $provider->phone=$request->phone;
        $provider->provider_type_id=$request->provider_type_id;
        $rules=array(
            'name'=>'required',
            'contact_name'=>'required',
            'phone'=>'required|numeric',
            'provider_type_id'=>'required',
        );
        $this->validate($request,$rules);
        if($provider->save()){
            return redirect("/providers");
        }else{
            return view ("providers/create",["provider"=>$provider]);
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
        Providers::destroy($id);
        return redirect ('/providers');
    }
}

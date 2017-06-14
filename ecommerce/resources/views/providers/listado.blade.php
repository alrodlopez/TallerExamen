@extends('layouts.app');
@section('content')
    <div class="big-padding text-center red-yellow white-text">
        <center><h1>Proveedores</h1></center>
    </div>
    <div class="container">
        <a href="/provider_types/" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Tipo de proveedores</a>
        <br>
    </br>
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Contact Name</td>
                <td>Address</td>
                <td>City</td>
                <td>Phone</td>
                <td>Tipo de proveedor</td>
            </tr>
            </thead>
            <tbody>
            @foreach($providers as $provider)
                <tr>
                <td>{{$provider->id}}</td>
                <td>{{$provider->name}}</td>
                <td>{{$provider->contact_name}}</td>
                <td>{{$provider->address}}</td>
                <td>{{$provider->city}}</td>
                 <td>{{$provider->phone}}</td>
                 <td>{{$provider->provider_type_id}}</td>
                    <td>
                        <a href="{{url('/providers/'.$provider->id).'/edit'}}">
                            <input type="button" value="Modificar" />
                        </a>
                        @include('providers.delete',['provider'=>$provider])
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div align="center" class="floating">
        <a href="/providers/create" class="btn btn-primary btn-fab">
            <i class="material-icons">+</i>
        </a>

    </div>
    <br>

    <br>
    <div align="center" class="floating">
        <a href="{{url('/panelcontrol/')}}" class="btn btn-success">
            Volver Panel Control
        </a>

@endsection

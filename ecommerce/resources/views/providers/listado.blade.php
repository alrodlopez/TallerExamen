@extends('layouts.app');
@section('content')
    <div class="big-padding text-center red-yellow white-text">
        <h1>Proveedores</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Contact Name</td>
                <td>Address</td>
                <td>City</td>
                <td>Phone</td>
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
                    <td>
                        <a href="{{url('/providers/'.$provider->id).'/edit'}}">
                            Modificar
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
            Agregar un proveedor
        </a>

    </div>
@endsection

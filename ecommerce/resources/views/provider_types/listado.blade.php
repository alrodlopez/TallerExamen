@extends('layouts.app');
@section('content')
    <div class="big-padding text-center red-yellow white-text">
        <center><h1> Tipos de Proveedor </h1></center>
    </div>
                <div class="container">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($provider_types as $provider_type)
                            <tr>
                                <td>{{$provider_type->id}}</td>
                                <td>{{$provider_type->name}}</td>
                                <td>{{$provider_type->description}}</td>
                                <td>
                                    <a href="{{url('/provider_types/'.$provider_type->id).'/edit'}}">
                                        MODIFICAR
                                    </a>
                                    @include('provider_types.delete',['provider_type'=>$provider_type])
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div align="center" class="floating">
                    <a href="/provider_types/create" class="btn btn-primary btn-fab">
                        <i class="material-icons">+</i>
                    </a>

                </div>
                <div align="center">
                    <a href="/providers" class="btn" class="colorado";>
                        Volver
                    </a>
                </div>


    @endsection
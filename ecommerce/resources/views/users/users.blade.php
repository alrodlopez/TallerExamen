@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Usuario Vendedor Datos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Opciones de clave</td>
                <td>Acciones</td>
            </tr>
            </thead>
            <tbody>
            <h1>Datos</h1>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{url('/seguridad/')}}" class="btn btn-info btn-sm">
                        Modificar Contraseña
                    </a></td>
           <td> <a href="{{url('/users/'.$user->id).'/edit'}}" class="btn btn-success">
                Modificar Datos
               </a> </td></tr>
            </tbody>
            @endforeach
        </table>
    </div>
    <div align="center" class="floating">
        <a href="{{url('/panelcontrol/')}}" class="btn btn-success">
            Volver Panel Control
        </a>


    </div>
@endsection
@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Usuario Vendedor Datos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <h1>Datos</h1>
            <tr><td>ID</td></tr>
            <tr><td>Name</td><td><a class="btn btn-primary btn-fab ">Modificar<i class="material-icons" ></td></tr>
            <tr><td>Last Name</td><td><a class="btn btn-primary btn-fab ">Modificar<i class="material-icons" ></td></tr>
            <tr><td>Phone</td><td><a class="btn btn-primary btn-fab ">Modificar<i class="material-icons" ></td></tr>
            <tr><td>EMail</td><td><a class="btn btn-primary btn-fab ">Modificar<i class="material-icons" ></td></tr>
            <tr><td>Address</td><td><a class="btn btn-primary btn-fab ">Modificar<i class="material-icons" ></td></tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
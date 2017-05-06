@extends('layouts.app')
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Panel Control Usuarios Vendedor</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
           <tr><td><a href="{{url('users')}}" class="btn btn-primary btn-fab ">Datos Personales<i class="material-icons" ></i></a></td></tr>

            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-primary btn-fab ">Datos Financieros<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-primary btn-fab ">Ranking y reputacion<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-primary btn-fab ">Mensajes<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-primary btn-fab ">Productos y servicios<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-primary btn-fab ">Seguridad y contraseñas<i class="material-icons" ></i></a></td></tr>

            </thead>

        </table>
    </div>
    <div align="center" class="floating">

        </a>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Panel de control usuarios Vendedor</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
           <tr><td><a href="{{url('users')}}" class="btn btn-success">Datos Personales<i class="material-icons" ></i></a></td></tr>

            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-success">Datos Financieros<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-success">Ranking y reputacion<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-success">Mensajes<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-success">Productos y servicios<i class="material-icons" ></i></a></td></tr>
            <tr><td><a href="{{url('panelcontrol')}}" class="btn btn-success">Seguridad y contraseñas<i class="material-icons" ></i></a></td></tr>

            </thead>

        </table>
    </div>
    <div align="center" class="floating">

        </a>
    </div>
@endsection

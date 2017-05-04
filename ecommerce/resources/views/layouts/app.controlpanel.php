@extends('layouts.app');
@section('content')
<div class="big-padding text-center blue-grey white-text">
    <h1>Panel de control</h1>
    <img src="" width="1309" height="100" alt="200"/>
</div>
<table width="1" border="1">
    <tbody>
    <tr>
        <td>Modificar datos vendedor</td>
    </tr>
    <tr>
        <td>Modificar datos Financieros</td>
    </tr>
    <tr>
        <td>Modificar contrasenas</td>
    </tr>
    <tr>
        <td>Ver mensajes</td>
    </tr>
    <tr>
        <td>Menu de actividad</td>
    </tr>
    <tr>
        <td>Salir</td>
    </tr>
    </tbody>
</table>


<div class="container">
    <table class="table table-bordered">

        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$userseller->code}}</td>
            <td>{{$userseller->databank}}</td>
            <td>{{$userseller->security}}</td>
            <td>{{$userseller->activities}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Nuevo Proveedor</h1>
        @include ('providers.error')
        <center><h1>Nuevo Proveedor</h1></center>
        @include('providers.form',['provider'=>$provider,'url'=>'/providers/','method'=>'POST'])
    </div>
@endsection
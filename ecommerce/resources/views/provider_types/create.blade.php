@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Nuevo tipo de proveedor</h1>
        @include ('provider_types.error')
        <center><h1>Nuevo Proveedor</h1></center>
        @include('provider_types.form',['provider_type'=>$provider_type,'url'=>'/provider_types/','method'=>'POST'])
    </div>
@endsection
@extends('layouts.app');
@section('content')
    <div class="container">
        <center><h1>Nuevo Proveedor</h1></center>
        @include('providers.form',['provider'=>$provider,'url'=>'/providers/','method'=>'POST'])
    </div>
@endsection
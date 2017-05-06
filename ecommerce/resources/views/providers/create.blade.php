@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Nuevo Proveedor</h1>
        @include('providers.form',['provider'=>$provider,'url'=>'/providers/','method'=>'POST'])
    </div>
@endsection
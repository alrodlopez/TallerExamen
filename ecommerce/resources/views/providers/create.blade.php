@extends('layouts.app');
@section('content')
    <div class="container">
<<<<<<< HEAD
        <h1>Nuevo Proveedor</h1>
        @include ('providers.error')
=======
        <center><h1>Nuevo Proveedor</h1></center>
>>>>>>> d1a5ecfa80b30dd01a72d27754b96f03cb9b638a
        @include('providers.form',['provider'=>$provider,'url'=>'/providers/','method'=>'POST'])
    </div>
@endsection
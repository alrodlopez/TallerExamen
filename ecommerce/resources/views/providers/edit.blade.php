@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Modificar Proveedor</h1>
        @include('providers.form',['provider'=>$provider, 'url'=>'providers/'.$provider->id,'method'=>'PATCH'])
    </div>
@endsection
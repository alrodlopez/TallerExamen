@extends('layouts.app');
@section('content')
    <div class="container">
        <CENTER><h1>Modificar Proveedor</h1></CENTER>
        @include('errors')
        @include('providers.form',['provider'=>$provider, 'provider_types'=>$provider_types,'url'=>'providers/'.$provider->id,'method'=>'PATCH'])
    </div>
@endsection
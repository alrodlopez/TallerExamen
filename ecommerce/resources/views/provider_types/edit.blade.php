@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Modificar tipo de proveedor</h1>
        @include('provider_types.form',['provider_type'=>$provider_type, 'url'=>'provider_types/'.$provider_type->id,'method'=>'PATCH'])
    </div>
@endsection
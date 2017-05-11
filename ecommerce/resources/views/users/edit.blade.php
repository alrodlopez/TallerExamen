@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Modificar datos usuario</h1>
        @include('users.form',['user'=>$users, 'url'=>'users/'.$users->id,'method'=>'PATCH'])
    </div>
@endsection
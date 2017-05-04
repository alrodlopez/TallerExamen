@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Proveedores</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Contact Name</td>
                <td>Address</td>
                <td>City</td>
                <td>Phone</td>
            </tr>
            </thead>
            <tbody>
            @foreach($providers as $provider)
                <tr>
                    <td>{{$provider->id}}</td>
                    <td>{{$provider->name}}</td>
                    <td>{{$provider->contact_name}}</td>
                    <td>{{$provider->address}}</td>
                    <td>{{$provider->city}}</td>
                    <td>{{$provider->phone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="floating">
        <a href="" class="btn btn-primary btn-fab">
            <i class="material-icons">add</i>

        </a>
    </div>
@endsection

@extends('layouts.app');
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <h1>Productos</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>N°</td>
                <td>Producto</td>
                <td>Descripcion</td>
                <td>Tipo de Producto</td>
                <td>Proveedor</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->product_type_id}}</td>
                    <td>{{$product->provider_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

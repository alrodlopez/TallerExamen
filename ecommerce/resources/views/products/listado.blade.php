@extends('layouts.app')
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
                <td>Precio</td>
                <td>Tipo de Producto</td>
                <td>Proveedor</td>
                <td>Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->pricing}}</td>
                    <td>{{$product->product_type_id}}</td>
                    <td>{{$product->provider_id}}</td>
                <td><a href="{{url('/products/'.$product->id.'/edit')}}">Editar</a></td>
                    <td><a href="{{url('/products/'.$product->id.'/edit')}}">Eliminar</a>
                    @include('products.delete',['product'=>$product])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div align="center" class="floating">
        <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">add</i>
        </a>
    </div>
    @endsection

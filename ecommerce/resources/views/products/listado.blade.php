@extends('layouts.app')
@section('content')
    <div class="big-padding text-center blue-grey white-text">
        <center><h1>Productos</h1></center>
    </div>
    <div class="container">
        <a href="/product_types/" class="btn btn-sm btn-green" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Tipo de productos</a>
      <br>
        <br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <td>N°</td>
                <td>Producto</td>
                <td>Descripción</td>
                <td>Precio</td>
                <td>Tipo de Producto</td>
                <td>Proveedor</td>
                <td></td>


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
                <td><a href="{{url('/products/'.$product->id.'/edit')}}">
                        <input type="button" value="Modificar">
                    </a>

                    @include('products.delete',['product'=>$product])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div align="center" class="floating">
        <a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">+</i>
        </a>
    </div>
    <br>

    <br>
    <div align="center" class="floating">
        <a href="{{url('/panelcontrol/')}}" class="btn btn-success">
            Volver Panel Control
        </a>
    @endsection

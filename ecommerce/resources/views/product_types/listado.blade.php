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
                <td>Descripción</td>
                <td>Modificar</td>
                <td>Eliminar</td>

            </tr>
            </thead>
            <tbody>
            @foreach($product_types as $product_type)
                <tr>
                    <td>{{$product_type->id}}</td>
                    <td>{{$product_type->description}}</td>
                    <td><a href="{{url('/product_types/'.$product_type->id.'/edit')}}">Editar</a></td>
                    <td>
                        @include('product_types.delete',['product_type'=>$product_type])
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div align="center" class="floating">
        <a href="{{url('/product_types/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">+</i>
        </a>
    </div>
@endsection

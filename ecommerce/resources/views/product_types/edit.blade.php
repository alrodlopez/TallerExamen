@extends("layouts.app");
@section("content")
    <div class="container white">
        <h1>Editar Tipo de Producto</h1>
        @include('product_types.form',['product_types'=>$product_type, 'url'=>'product_types'.$product_type->id, 'method'=>'PATCH'])
    </div>
@endsection
@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <center><h1>Nuevo Tipo de Producto</h1></center>
    @include('product_types.form',['product_types'=>$product_type, 'url'=>'product_types', 'method'=>'POST'])

@endsection
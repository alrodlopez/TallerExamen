@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <center><h1>Nuevo Producto</h1></center>
    @include('products.form',['product'=>$product, 'url'=>'/products', 'method'=>'POST'])

@endsection
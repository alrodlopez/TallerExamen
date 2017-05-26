@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <center><h1>Nuevo Producto</h1></center>

    @include('errors')
    @include('products.form',['product'=>$product,'product_types'=>$product_types,'providers'=>$providers, 'url'=>'/products', 'method'=>'POST'])

@endsection
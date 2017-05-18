@extends("layouts.app");
@section("content")
    <div class="container white">
        <center><h1>Editar Producto</h1></center>
    @include('products.form',['product'=>$product, 'url'=>'products/'.$product->id, 'method'=>'PATCH'])
    </div>
@endsection
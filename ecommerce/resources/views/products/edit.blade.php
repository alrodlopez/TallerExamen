@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <h1>Nuevo producto</h1>
    @include('products.form',['product'=>$product, 'url'=>'/products/'.$product->id, 'method'=>'PATCH'])

@endsection
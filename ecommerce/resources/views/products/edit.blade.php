@extends("layouts.app");
@section("content")
    <div class="container white">
        <center><h1>Editar Producto</h1></center>
        @include('errors')
    @include('products.form',['product'=>$product,'product_types'=>$product_types,'providers'=>$providers, 'url'=>'products/'.$product->id, 'method'=>'PATCH'])
    </div>
@endsection
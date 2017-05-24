@extends("layouts.app");
@section("content")
    <div class="container white">
        <center><h1>Editar</h1></center>
        @include('errors')
        @include('product_types.form',['product_types'=>$product_type, 'url'=>'product_types/'.$product_type->id, 'method'=>'PATCH'])
    </div>
@endsection
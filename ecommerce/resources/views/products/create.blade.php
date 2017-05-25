@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <center><h1>Nuevo Producto</h1></center>
<<<<<<< HEAD
    @include('products.error')
=======
    @include('errors')
>>>>>>> e904a1fb9a5037f4f24765d82cb5db3e7842b5b1
    @include('products.form',['product'=>$product, 'url'=>'/products', 'method'=>'POST'])

@endsection
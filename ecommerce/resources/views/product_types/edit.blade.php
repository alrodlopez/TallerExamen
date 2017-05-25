@extends("layouts.app");
@section("content")
    <div class="container white">
        <center><h1>Editar</h1></center>
<<<<<<< HEAD

=======
        @include('errors')
>>>>>>> e904a1fb9a5037f4f24765d82cb5db3e7842b5b1
        @include('product_types.form',['product_types'=>$product_type, 'url'=>'product_types/'.$product_type->id, 'method'=>'PATCH'])
    </div>

@endsection



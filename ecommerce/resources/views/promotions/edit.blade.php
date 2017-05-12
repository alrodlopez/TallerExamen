@extends("layouts.app");
@section("content")
    <div class="container white">
    <h1>Editar Promocion</h1>
    @include('promotions.form',['promotions'=>$promotions, 'url'=>'promotions/'.$promotions->id, 'method'=>'PATCH'])
    </div>
@endsection
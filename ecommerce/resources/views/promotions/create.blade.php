@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <h1>Nueva Promocion</h1>
    @include('promotions.form',['promotions'=>$promotions, 'url'=>'/promotions', 'method'=>'POST'])

@endsection
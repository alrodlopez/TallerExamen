@extends("layouts.app");
@section("content")
    <div class="container white"></div>
    <h1>Nuevo producto</h1>
    {!! Form::open(['url'=>'/products','method'=>'POST']) !!}
    <div class="form-group">
        {{Form::text('name','',['class'=>'form-control','placeholder'=> 'Nombre'])}}
    </div>
    <div class="form-group">
        {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Escribe tu descripcion'])}}
    </div>
    <div class="form-group">
        {{Form::number('pricing','',['class'=>'form-control','placeholder'=> 'Precio de tu producto'])}}
    </div>
    <div class="form-group text-right">
        <a href="{{url('/products')}}">Regresar al listado de productos</a>
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>
    {!! Form::close() !!}

@endsection
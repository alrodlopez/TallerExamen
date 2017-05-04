@extends('layouts.app');
@section('content')
    <div class="container">
        <h1>Nuevo Proveedor</h1>
        {!! Form::open(['url'=>'/providers','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::text('name','',['class'=>'form-control',
                'placeholder'=>'Nombre del proveedor'])}}
            </div>
            <div class="form-group">
                {{Form::text('contact_name','',['class'=>'form-control',
                'placeholder'=>'Nombre del contacto en la empresa'])}}
            </div>
            <div class="form-group">
                {{Form::text('address','',['class'=>'form-control',
                'placeholder'=>'Direccion'])}}
            </div>
            <div class="form-group">
                {{Form::text('city','',['class'=>'form-control',
                'placeholder'=>'Ciudad'])}}
            </div>
            <div class="form-group">
                {{Form::text('phone','',['class'=>'form-control',
                'placeholder'=>'Telefono del contacto'])}}
            </div>
        <div class="form-group text-right">
            <a href="{{url('/providers')}}">Cancelar y volver</a>
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
        {!! Form::close() !!}
    </div>
@endsection
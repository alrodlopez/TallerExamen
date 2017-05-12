{!! Form::open(['url'=> $url, 'method'=>$method]) !!}

<div class="form-group">
    {{Form::textarea('description',$product_type->description,['class'=>'form-control','placeholder'=>'Escribe tu descripcion'])}}
</div>

<div class="form-group text-right">
    <a href="{{url('product_types')}}">Regresar al listado de productos</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
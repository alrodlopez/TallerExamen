{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
<div class="form-group">
    {{Form::textarea('name',$promotions->id,['class'=>'form-control','placeholder'=> 'Nombre Promocion'])}}
</div>
<div class="form-group">
    {{Form::textarea('description',$promotions->name,['class'=>'form-control','placeholder'=>'Escribe tu descripcion'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/promotions')}}" class="btn btn-success">
        Volver al menu de promociones
    </a>
    <input type="submit" value="Enviar" class="btn btn-success">

</div>
{!! Form::close() !!}
{!! Form::open(['method'=>$method,'url'=>$url]) !!}
<div class="form-group">
    {{Form::text('name',$provider_type->name,['class'=>'form-control',
    'placeholder'=>'Nombre del proveedor'])}}
</div>
<div class="form-group">
    {{Form::text('contact_name',$provider_type->decription,['class'=>'form-control',
    'placeholder'=>'Nombre del contacto en la empresa'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/providers')}}">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
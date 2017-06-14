{!! Form::open(['method'=>$method,'url'=>$url]) !!}
<div class="form-group">
    <label for="Nombre">Nombre del tipo de proveedor</label>
    {{Form::text('name',$provider_type->name,['class'=>'form-control'])}}

</div>
<div class="form-group">
    <label for="Nombre">Descripcion</label>
    {{Form::text('description',$provider_type->decription,['class'=>'form-control'])}}

</div>
<div class="form-group text-right">
    <a href="{{url('/providers')}}"class="btn btn-success">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
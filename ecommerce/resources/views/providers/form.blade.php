
{!! Form::open(['url'=>$url,'method'=>$method]) !!}
<div class="form-group">
    <label for="Nombre">Nombre del proveedor</label>
    {{Form::text('name',$provider->name,['class'=>'form-control'])}}
</div>
<div class="form-group">
    <label for="Contacto">Nombre del contacto</label>
    {{Form::text('contact_name',$provider->contact_name,['class'=>'form-control'])}}
</div>
<div class="form-group">
    <label for="Direccion">Dirección</label>
    {{Form::text('address',$provider->address,['class'=>'form-control'])}}
</div>
<div class="form-group">
    <label for="Ciudad">Ciudad</label>
    {{Form::text('city',$provider->city,['class'=>'form-control'])}}
</div>
<div class="form-group">
    <label for="Telefono">Número de telefono</label>
    {{Form::text('phone',$provider->phone,['class'=>'form-control'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/providers')}}">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
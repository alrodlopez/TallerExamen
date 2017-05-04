
{!! Form::open(['url'=>$url,'method'=>$method]) !!}
<div class="form-group">
    {{Form::text('name',$provider->name,['class'=>'form-control',
    'placeholder'=>'Nombre del proveedor'])}}
</div>
<div class="form-group">
    {{Form::text('contact_name',$provider->contact_name,['class'=>'form-control',
    'placeholder'=>'Nombre del contacto en la empresa'])}}
</div>
<div class="form-group">
    {{Form::text('address',$provider->address,['class'=>'form-control',
    'placeholder'=>'Direccion'])}}
</div>
<div class="form-group">
    {{Form::text('city',$provider->city,['class'=>'form-control',
    'placeholder'=>'Ciudad'])}}
</div>
<div class="form-group">
    {{Form::text('phone',$provider->phone,['class'=>'form-control',
    'placeholder'=>'Telefono del contacto'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/providers')}}">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
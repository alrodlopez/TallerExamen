
{!! Form::open(['url'=>$url,'method'=>$method]) !!}
<thead>
<tr>
    <td><b>Nombre:</b></td>
</tr>
</thead>
<div class="form-group">

    {{Form::text('name',$provider->name,['class'=>'form-control'])}}
</div>


<thead>
<tr>
    <td><b>Nombre del contacto:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::text('contact_name',$provider->contact_name,['class'=>'form-control'])}}
</div>

<thead>
<tr>
    <td><b>Dirección:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::text('address',$provider->address,['class'=>'form-control'])}}
</div>

<thead>
<tr>
    <td><b>Ciudad:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::text('city',$provider->city,['class'=>'form-control'])}}
</div>

<tr>
    <td><b>Número de teléfono:</b></td>
</tr>
</thead>
<div class="form-group">
    {{Form::text('phone',$provider->phone,['class'=>'form-control'])}}
</div>
<thead>

<thead>
<tr>
    <td><b>Tipo de proveedor:</b></td>
</tr>
</thead>
<div class="form-group">
    <select name="provider_type_id" id="inputpro" class="form-control">
        <option value="">-- Escoja el tipo de proveedor --</option>
        @foreach ($provider_types as $provider_type)
            <option value="{{$provider_type['id']}}">{{$provider_type['name']}}</option>
        @endforeach
    </select>
    <!--{{Form::select('provider_types_id',$provider_types, null, ['class' => 'form-control'])}}-->
</div>

<div class="form-group text-right">
    <a href="{{url('/providers')}}" class="btn btn-success">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

{!! Form::close() !!}
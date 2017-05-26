{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
<thead>
            <tr>
                <td><b>Nombre:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::text('name',$product->name,['class'=>'form-control','placeholder'=> 'Nombre'])}}
</div>
<thead>
            <tr>
                <td><b>Descripción:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::textarea('description',$product->description,['class'=>'form-control','placeholder'=>'Escribe tu descripcion'])}}
</div>
<thead>
            <tr>
                <td><b>Precio:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::number('pricing',$product->pricing,['class'=>'form-control','placeholder'=> 'Precio de tu producto'])}}
</div>
<thead>
            <tr>
                <td><b>Tipo de producto:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::number('product_type_id',$product->product_type_id,['class'=>'form-control','placeholder'=> 'Tipo de producto'])}}
</div>
<thead>
            <tr>
                <td><b>Proveedor:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::number('provider_id',$product->provider_id,['class'=>'form-control','placeholder'=> 'Proveedor'])}}

</div>
<div class="form-group text-right">
    <a href="{{url('/products')}}"class="btn btn-success">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
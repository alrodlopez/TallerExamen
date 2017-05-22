{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
<thead>
            <tr>
                <td><b>NOMBRE:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::text('name',$product->name,['class'=>'form-control','placeholder'=> 'Nombre'])}}
</div>
<thead>
            <tr>
                <td><b>DESCRIPCIÓN:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::textarea('description',$product->description,['class'=>'form-control','placeholder'=>'Escribe tu descripcion'])}}
</div>
<thead>
            <tr>
                <td><b>PRECIO:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::number('pricing',$product->pricing,['class'=>'form-control','placeholder'=> 'Precio de tu producto'])}}
</div>
<thead>
            <tr>
                <td><b>TIPO DE PRODUCTO:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::number('product_type_id',$product->product_type_id,['class'=>'form-control','placeholder'=> 'Tipo de producto'])}}
</div>
<thead>
            <tr>
                <td><b>PROVEEDOR:</b></td>
            </tr>
            </thead>
<div class="form-group">
    {{Form::number('provider_id',$product->provider_id,['class'=>'form-control','placeholder'=> 'Proveedor'])}}
    
</div>
<div class="form-group text-right">
    <a href="{{url('/products')}}">Regresar al listado de productos</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
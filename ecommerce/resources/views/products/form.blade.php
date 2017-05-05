{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
<div class="form-group">
    {{Form::text('name',$product->name,['class'=>'form-control','placeholder'=> 'Nombre'])}}
</div>
<div class="form-group">
    {{Form::textarea('description',$product->description,['class'=>'form-control','placeholder'=>'Escribe tu descripcion'])}}
</div>
<div class="form-group">
    {{Form::number('pricing',$product->pricing,['class'=>'form-control','placeholder'=> 'Precio de tu producto'])}}
</div>
<div class="form-group">
    {{Form::number('pricing',$product->product_type_id,['class'=>'form-control','placeholder'=> 'Tipo de producto'])}}
</div>
<div class="form-group">
    {{Form::number('pricing',$product->provider_id,['class'=>'form-control','placeholder'=> 'Proveedor'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/products')}}">Regresar al listado de productos</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
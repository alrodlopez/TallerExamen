{!! Form::open(['url'=> $url, 'method'=>$method]) !!}
<thead>
            <tr>
                <td><b>Producto:</b></td>
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
    {{Form::text('pricing',$product->pricing,['class'=>'form-control','placeholder'=> 'Precio de tu producto'])}}
</div>
<thead>
            <tr>
                <td><b>Tipo de Producto:</b></td>
            </tr>
            </thead>

<div class="form-group">
    <select name="product_type_id" id="inputpro" class="form-control">
        <option value="">-- Escoja el tipo de producto --</option>
        @foreach ($product_types as $product_type)
            <option value="{{$product_type['id']}}">{{$product_type['description']}}</option>
        @endforeach
    </select>
</div>
<thead>
            <tr>
                <td><b>Proveedor:</b></td>
            </tr>
            </thead>
<div class="form-group">
    <select name="provider_id" id="inputpro" class="form-control">
        <option value="">-- Escoja el proveedor --</option>
        @foreach ($providers as $provider)
            <option value="{{$provider['id']}}">{{$provider['name']}}</option>
        @endforeach
    </select>
</div>
<div class="form-group text-right">
    <a href="{{url('/products')}}"class="btn btn-success">Cancelar y volver</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}
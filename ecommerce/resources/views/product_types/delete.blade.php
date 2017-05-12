{{Form::open(['url'=>'product_types'.$product_type->id,'method' => 'DELETE'])}}
<input type="submit" class="btn btn-link red-text no-padding no-margin " value="Eliminar">
{!! Form::close() !!}
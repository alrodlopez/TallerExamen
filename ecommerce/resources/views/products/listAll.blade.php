<html>
<body>

<h1>Listado de Productos</h1>
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>Tipo</th>
        <th>Proveedor</th>
    </tr>
    @foreach($products as $product)
        <tr>
        <td>
            <a href="/ecommerce/public/products/show/8">Ver</a>
        </td>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->product_type_id}}</td>
        <td>{{$product->provider_id}}</td>
        </tr>
    @endforeach

</table>


</body>
</html>
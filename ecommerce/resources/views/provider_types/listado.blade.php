<div id="tprov" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tipos de proveedor</h4>
            </div>
            <div class="modal-body">
                <p>
                <div class="container">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Description</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($provider_types as $provider_type)
                            <tr>
                                <td>{{$provider_type->id}}</td>
                                <td>{{$provider_type->name}}</td>
                                <td>{{$provider_type->contact_name}}</td>
                                <td>{{$provider_type->address}}</td>
                                <td>{{$provider_type->city}}</td>
                                <td>{{$provider_type->phone}}</td>
                                <td>
                                    <a href="{{url('/provider_types/'.$provider_type->id).'/edit'}}">
                                        Modificar
                                    </a>
                                    @include('provider_types.delete',['provider_type'=>$provider_type])
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div align="center" class="floating">
                    <a href="/provider_types/create" class="btn btn-primary btn-fab">
                        Agregar un tipo de proveedor
                    </a>

                </div>
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
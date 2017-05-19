@if($errors->any())
<div class="alert alert-danger" role="alert">
        <p>Por favor llene los campos correctamente</p>
        <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}}
                @endforeach
        </ul>
        @endif
</div>
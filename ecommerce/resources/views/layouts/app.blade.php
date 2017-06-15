<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{ url('/') }}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                Comercio Electronico Bolivia
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
             @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Ingresar</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                    <li><a href="{{ url('providers/create') }}">Registro de proveedores</a></li>
            @else
                    <li>
                      <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                          Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
        </ol>
    </div>
</div>
   

        @yield('content')
    
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p></p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p></p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/">GitHub</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="https://twitter.com/">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer>

    

    <!-- Scripts -->
    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
</script>
    
<script src="{{asset('dist/js/app.js')}}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
</body>
</html>

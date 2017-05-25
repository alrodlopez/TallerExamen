@extends('layouts.app')



@section('title','E-commerce')

    @section('content')
        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2>
                <strong>
                    Hola!!! Bienvenido a esta tienda de electronicos
                </strong>
            </h2>
            <br>
            <a href="{{url('/products')}}">
                <button class="button large">Vea nuestros productos</button>
            </a>
        </section>

        <br/>
        <div class="subheader text-center">
            <h2>
                Ultimos productos!!!
            </h2>
        </div>

        <!-- Latest Products -->
        <div class="row">


                <h3>                 No existen productos</h3>

        </div>


    @endsection


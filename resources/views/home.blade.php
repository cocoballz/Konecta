@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tienda Virtual Konecta Store</div>

                <div class="card-body">

                    {!! '<b>Bienvenido</b>'!!}

                    <hr>
                    <label>Opciones Disponibles para la tienda 
                    </label>
                    <ul>
                    <li> <a href={{route('productos')}}>Listado de Productos</a></li>
                    <li> <a href={{route('add_product')}}>Crear Nuevos Productos</a></li>
                    <li> <a href={{route('home')}}>Estidisticas </a></li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

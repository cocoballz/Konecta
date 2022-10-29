@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Productos de Inventario <span class="badge bg-secondary">Stock</span></h3>
            <hr>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4"> 
                        <div class="bd-callout bd-callout-success">
                            <h5>Producto Con Mayor Stock:</h5>
                            <span class="badge bg-secondary"> {{$max_stock->p_nombre}} : [{{$max_stock->p_stock}}] Unidades. </span> 
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5 "> 
                        <div class="bd-callout bd-callout-primary">
                            <h5>Producto Con Mayor cantidad de ventas</h5>
                            <span class="badge bg-secondary"> {{$max_ventas->producto->p_nombre}} : [{{$max_ventas->total}}] Unidades vendidas. </span> 
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col col-lg-2">
                        <a href="{{route('add_product')}}" class="btn btn-primary">+ Crear Producto</a>
                    </div>
                </div>
            </div>
            <div>
                <table id="table_id" class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">referencia</th>
                            <th scope="col">precio</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Stock</th>
                            <th scope="col">creacion</th>
                            <th scope="col">estado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider text-center">

                        @forelse($datos as $dato)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$dato->p_nombre}}</th>
                            <th>{{$dato->p_referencia}}</th>
                            <th>${{$dato->p_precio}}</th>
                            <th>{{$dato->p_peso}}kg</th>
                            <th>{{$dato->p_categoria}}</th>
                            <th>{{$dato->p_stock}}</th>
                            <th>{{$dato->created_at->diffForHumans()}}</th>
                            <th>{!!($dato->p_estado == 1)? '<span class="badge rounded-pill text-bg-primary">Activo</span>': '<span class="badge rounded-pill text-bg-danger">Eliminado</span>' !!}</th>
                            <th>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a href="{{ route('vender_producto',['entrada'=> $dato->id]) }}" class="btn btn-success">Vender</a>
                                    <a href="{{ route('editar_producto',['entrada'=> $dato->id]) }}" class="btn btn-warning">Editar</a>
                                    <a href="{{ route('eliminar_producto',['entrada'=> $dato->id]) }}" class="btn btn-danger">Eliminar</a>
                                </div>
                            </th>
                        </tr>
                        @empty

                        @endforelse

                    </tbody>
                </table>
                <hr>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Importante!</h4>
                    <p>Desde esta tabala es posible crear, editar o eliminar productos de la tienda</p>
                    <hr>
                    <p class="mb-0">Para crear un producto nuevo valide que ya no se encuentre creado y de clic en el boton <b>"+ Crear Producto"</b>.</p>
                </div>
            </div>
            <a href="{{route('home')}}" class="btn btn-danger">Volver</a>
        </div>
    </div>
</div>
<script defer>
    $(document).ready(function() {
        $('#table_id').DataTable();
    })
</script>
@endsection
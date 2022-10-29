@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Ventas realizadas <span class="badge bg-secondary">log</span></h3>
            <hr>

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
            <div>
                <table id="table_id" class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">referencia</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Observacion</th>
                            <th scope="col">creacion</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider text-center">
                        @forelse($datos as $dato)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$dato->producto->p_nombre}}</th>
                            <th>{{$dato->producto->p_referencia}}</th>
                            <th>{{$dato->producto->p_categoria}}</th>
                            <th>${{$dato->producto->p_precio}}</th>
                            <th>{{$dato->v_cantidad}}</th>
                            <th>{{$dato->v_comentario}}</th>
                            <th>{{$dato->created_at->diffForHumans()}}</th>    
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                <hr>
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
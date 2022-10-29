@extends('layouts.template')

@section('content')
<div class="container">

    <div class="row">

        <div class="col">
            <div class="card border-success mb-3">
                <div class="card-header">
                    <h5 class="card-title"> {{$datos->title}} Producto.</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <form action="{{route('store_product')}}" method="POST" enctype="multipart/form-data">

                            <input type="hidden" class="form-control" name="opc" id="opc" value="{{($opc != 0 )? $opc : 0}}" >
                            @csrf()
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" name="p_nombre" id="p_nombre" placeholder="Nombre producto" value="{{ old('p_nombre',$datos->p_nombre)}}">
                                <label for="entr_title">Nombre:*</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" name="p_referencia" id="p_referencia" placeholder="Referencia Producto" value="{{ old('p_referencia',$datos->p_referencia)}}">
                                <label for="entr_title">Referencia:*</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="number" min="0" class="form-control" name="p_precio" id="p_precio" placeholder="Precio producto" $ value="{{ old('p_precio',$datos->p_precio)}}">
                                <label for="entr_title">Precio de venta ($):*</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="number" min="0" class="form-control" name="p_peso" id="p_peso" placeholder="Peso producto Kg" value="{{ old('p_peso',$datos->p_peso)}}">
                                <label for="entr_title">peso(Kg):*</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" name="p_categoria" id="p_categoria" placeholder="Categoria producto" value="{{ old('p_categoria',$datos->p_categoria)}}">
                                <label for="entr_title">Categoria:*</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="number" min="1" max="100" class="form-control" name="p_cantidad" id="p_cantidad" placeholder="Cantidad de stock" value="{{ old('p_cantidad',$datos->p_stock)}}">
                                <label for="entr_title">Cantidad (stock):*</label>
                            </div>

                            @if($opc !=0)
                            <div class="form-floating">
                                <select name="p_status" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <label for="floatingSelect">Estado del producto</label>
                            </div>
                            @endif

                            <br>
                            <a href="{{route('productos')}}" class="btn btn-danger">Volver</a>
                            <button class="btn btn-group-lg" style="background-color: darkseagreen;" type="submit">Guardar</button>
                        </form>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
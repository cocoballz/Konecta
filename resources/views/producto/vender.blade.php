@extends('layouts.template')

@section('content')
<div class="container">

    <div class="row">

        <div class="col">
            <div class="card border-success mb-3">
                <div class="card-header">
                    <h5 class="card-title"> {{$datos->title}} Producto. {{$datos->p_nombre}} Cantidad en stock [{{$datos->p_stock}} Unidades] </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <form action="{{route('venta_products')}}" method="POST" enctype="multipart/form-data">

                            <input type="hidden" class="form-control" name="opc" id="opc" value="{{($opc != 0 )? $opc : 0}}" >
                            @csrf()

                            <div class="form-floating mb-3">
                                <input required type="number" min="1" max="{{$datos->p_stock}}" class="form-control" name="p_cantidad" id="p_cantidad" placeholder="Cantidad" value="{{ old('p_cantidad','')}}">
                                <label for="entr_title">Cantidad:*</label>
                            </div>

                            <div class="form-floating">
                            <textarea  required  class="form-control" placeholder="detalle aqui datos del cliente" name="descripcion" id="descripcion" style="height: 100px">{{ old('descripcion','')}}</textarea>
                            <label for="descripcion">Descripcion*.</label>
                            </div>
                            <hr>

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
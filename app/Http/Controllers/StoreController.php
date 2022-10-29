<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductoModel;
use App\Models\VentaModel;

class StoreController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{

    return view('home',compact('datos'));

}

public function list_products(){
    $datos= ProductoModel::select('*')->get();
    return view('producto.list',compact('datos'));
}

public function add_product(){
    $title= "Crear";
    $datos= new ProductoModel;
    $opc = 0;
    return view('producto.form',compact('datos','title','opc'));
}

public function destroy_products($entrada = '0'){

    $estado=ProductoModel::where('id',  $entrada)->update(['p_estado' => 0 ]);
    return redirect(route('productos'))->with('status', 'Registro Desactivado con Exito');
}

public function edit_products($entrada=0){
    $dat= ProductoModel::select('*')->where('id',$entrada)->get();
    $datos= $dat[0];
    $opc = $entrada;
    $title= "Actualizar";
    return view('producto.form',compact('datos','title','opc'));
}

public function store_product(){

if(request('opc') == 0 ){ //si es 0 es un producto nuevo
    request()->validate([
        'p_nombre' => 'required|min:3',
        'p_referencia' => 'required|min:3',
        'p_categoria' => 'required|min:3',
        'p_precio' => 'required|Numeric',
        'p_peso' => 'required|Numeric',
        'p_cantidad' => 'required|Numeric',
        'opc' => 'required',
    ], [
        'p_nombre.required' => 'Debe escribir un nombre para el producto',
        'p_referencia.required' => 'Debe escribir una referencia para el producto',
        'p_categoria.required' => 'Debe escribir una categoria para el producto',
        'p_precio.required' => 'Debe escribir un precio para el producto',
        'p_peso.required' => 'Debe escribir un peso para el producto',
        'p_cantidad.required' => 'Debe escribir una cantidad para el producto',
        'p_nombre.min' => 'el nombre debe tener min:3 letras',
        'p_referencia.min' => 'la referencia debe tener min:3 letras',
        'p_precio.min' => 'la categoria debe tener min:3 letras',
    ]);

    $producto = new ProductoModel;
    $producto->p_nombre = request()->p_nombre;
    $producto->p_referencia = request()->p_referencia;
    $producto->p_precio = request()->p_precio;
    $producto->p_peso = request()->p_peso;
    $producto->p_categoria = request()->p_categoria;
    $producto->p_stock = request()->p_cantidad;
    $producto->save();
}
else { // el producto se esta editando
    request()->validate([
        'p_nombre' => 'required|min:3',
        'p_referencia' => 'required|min:3',
        'p_categoria' => 'required|min:3',
        'p_precio' => 'required|Numeric',
        'p_peso' => 'required|Numeric',
        'p_cantidad' => 'required|Numeric',
        'opc' => 'required',
    ], [
        'p_nombre.required' => 'Debe escribir un nombre para el producto',
        'p_referencia.required' => 'Debe escribir una referencia para el producto',
        'p_categoria.required' => 'Debe escribir una categoria para el producto',
        'p_precio.required' => 'Debe escribir un precio para el producto',
        'p_peso.required' => 'Debe escribir un peso para el producto',
        'p_cantidad.required' => 'Debe escribir una cantidad para el producto',
        'p_nombre.min' => 'el nombre debe tener min:3 letras',
        'p_referencia.min' => 'la referencia debe tener min:3 letras',
        'p_precio.min' => 'la categoria debe tener min:3 letras',
    ]);

    $id= request()->opc;
    $estado=(request()->p_status != 1)? 0:1;


    $estado=ProductoModel::where('id',$id)->update([
        'p_nombre' => request()->p_nombre,
        'p_referencia' => request()->p_referencia,
        'p_precio' => request()->p_precio, 
        'p_peso' => request()->p_peso, 
        'p_categoria' => request()->p_categoria, 
        'p_stock' => request()->p_cantidad, 
        'p_estado' =>  $estado, 
    ]);
}

return redirect(route('productos'))->with('status', 'Registro Guardado con exito');
}

public function vender_producto($entrada=0){
    $dat= ProductoModel::select('*')->where('id',$entrada)->get();
    $datos= $dat[0];
    $opc = $entrada;
    $title= "Vender";
    return view('producto.vender',compact('datos','title','opc'));
}
public function venta_products(){
 request()->validate([
        'p_cantidad' => 'required|Numeric',
        'opc' => 'required',
        'descripcion' => 'required',
    ]);

    $id= request()->opc;
    $dat= ProductoModel::select('p_stock')->where('id',$id)->get();

    $new_stock = $dat[0]->p_stock - request()->p_cantidad;

if($new_stock >= 0){

  $venta = new VentaModel;
    $venta->id_producto = $id;
    $venta->v_cantidad = request()->p_cantidad;
    $venta->v_comentario = request()->descripcion;
    $venta->save();

 $estado=ProductoModel::where('id',$id)->update(['p_stock' => $new_stock]);

 return redirect(route('productos'))->with('status', 'La Venta Se realizo correctamente');

}else{
    return redirect(route('productos'))->with('error', 'La Venta no se pudo seralizar por cantidad de Stock');
}
 
   

}







/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}


/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}
}

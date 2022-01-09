<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\User;
use App\Models\Producto;
use App\Models\DetalleOrden;
use App\Models\Tienda;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $orden = Orden::where('users_id', $id)->get();
        return response()->json($orden, 200);
    }

    public function detalle($id){
        $detalle = DetalleOrden::where('orden_id', $id)->first();
        return response()->json($detalle, 200);
    }

    public function store(Request $request)
    {
        //
    }

    public function venta( $usuario, $id ){
        
        $product = Producto::findOrFail($id);
        $respuesta = 0;
        if ($product->stock > 0) {
            $newOrden = new Orden();
            $newOrden->esCarrito = false;
            $newOrden->fechapedido = Carbon::now()->format('Y-m-d');
            $newOrden->estado = "1";  //en Proceso
            $newOrden->users_id = $usuario;
            $newOrden->save();
    
            $orden = $newOrden->id;
    
            $detalle = new DetalleOrden();
            $detalle->orden_id = $orden;
            $detalle->producto_id = $id;
            $detalle->subtotal = $product->precio;
            $detalle->cantidad = 1;
            $detalle->save();
    
            $product->stock = $product->stock - 1;
            $product->update();
            $respuesta = 1;
        }
        return response()->json($respuesta, 200);
    }

    public function pdf(){

        $Orden = Orden::all()->max('id');
        $newOrden = Orden::findOrFail($Orden);
        $cliente = User::where('id',$newOrden->users_id)->first();
        $orden = $newOrden->id;
        $detalle = DetalleOrden::where('orden_id',$orden)->first();

        $product = Producto::where('id', $detalle->producto_id)->first();
        
        $tienda = Tienda::where('id', $product->tienda_id)->first();
        $pdf = PDF::loadView('pdf.pdf',compact('cliente','newOrden','product','detalle','tienda'));
        
        return $pdf->download('Comprobante.pdf');
    }
}

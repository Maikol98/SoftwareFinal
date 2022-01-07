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

    public function pdf( $id ){
        $user = User::all()->max('id');
        $newOrden = new Orden();
        $newOrden->esCarrito = false;
        $newOrden->fechapedido = Carbon::now()->format('Y-m-d');
        $newOrden->estado = "1";  //en Proceso
        $newOrden->users_id = $user;
        $newOrden->save();
        $orden = $newOrden->id;
        $product = Producto::where('id', $id)->first();
        $detalle = new DetalleOrden();
        $detalle->orden_id = $orden;
        $detalle->producto_id = $id;
        $detalle->subtotal = $product->precio;
        $detalle->cantidad = 1;
        $detalle->save();
        $cliente = User::where('id', $user)->first();
        $tienda = Tienda::where('id', $product->tienda_id)->first();
        $pdf = PDF::loadView('pdf.pdf',compact('cliente','newOrden','product','detalle','tienda'));
        
        return $pdf->download('Comprobante.pdf');
    }
}
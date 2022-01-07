<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    
    public function index()
    {
        $tiendas = Tiendas::All();
        return response()->json($tiendas, 200, $headers);
    }
    
    
    public function store(Request $request)
    {
        //
    }


    public function update(Request $request, Tienda $tienda)
    {
        //
    }

    
    public function destroy(Tienda $tienda)
    {
        //
    }
}

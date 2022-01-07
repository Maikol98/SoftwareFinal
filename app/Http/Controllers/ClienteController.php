<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $Cliente = new User();
        //     $Cliente->name = "maikol";
        //     $Cliente->email = "maikols10@gmail.com";
        //     $Cliente->password = bcrypt("12345678");
        //     $Cliente->fechaNacimiento = Carbon::now()->format('Y-m-d');
        //     $Cliente->celular = "75544119";
        //     $Cliente->rol_id = 1;
        //     $Cliente->save();
        $clientes = User::all();
        return response()->json($clientes, 200);
    }

    
    public function store(Request $request)
    {   
        $respuesta = 0;
        try {
            $Cliente = new User();
            $Cliente->name = $request->input('nombre');
            $Cliente->email = $request->input('email');
            $Cliente->password = bcrypt($request->input('contra'));
            $Cliente->fechaNacimiento = $request->input('fecha');
            $Cliente->celular = $request->input('celular');
            $Cliente->rol_id = 1;
            $Cliente->save();
            $respuesta = 1;
        } catch (\Throwable $th) {
            $respuesta = 0;
        }

        return response()->json($respuesta, 200);
    }

    
    public function update(Request $request, User $cliente)
    {
        //
    }

    
    public function destroy(User $cliente)
    {
        //
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $resultado = DB::table('users')->where('email',$email)
            ->first();
            // return response()->json($resultado, 200);
        if (is_null($resultado)) {
            return json_encode(0);
        }else {
            if(Hash::check($request->password, $resultado->password)){
                return response()->json($resultado, 200);
            }
            return json_encode(0);
        }
    }
}

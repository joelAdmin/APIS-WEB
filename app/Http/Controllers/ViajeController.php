<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Viaje;

class ViajeController extends Controller
{
    public function all()
    {
        //$result = Viaje::all();
		$result = \DB::table('viajes')->join('clientes', 'clientes.id', '=', 'viajes.cliente_id')->get();
        return response()->json([
            'res' => true,
                'message' => 'success', 
                    'result'=> $result,
        ], 200);
    }
	
	public function store(Request $request){

        $validator = Validator::make($request->input(), [
            'fechaviaje'=>'required',
                'pais'=>'required',
                    'ciudad'=>'required',
                        'cliente_id'=>'required',
        ]);
        
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors(),'res' => false]);
        }

        $id = Cliente::create($request->input())->id;
        if($id){
            return response()->json([
                'res' => true, 
                    'message' => "REGISTRO CREADO CORRECTAMENTE, GRACIAS"], 200);   
        }else{
            return response()->json([
                'res' => true, 
                    'message' => "ERROR AL CREAR EL REGISTRO, GRACIAS"], 200); 
        }        
    }
}

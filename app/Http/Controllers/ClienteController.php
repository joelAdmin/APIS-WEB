<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function all()
    {
        $result = Cliente::all();
        return response()->json([
            'res' => true,
                'message' => 'success', 
                    'result'=> $result,
        ], 200);
    }


    public function store(Request $request){

        $validator = Validator::make($request->input(), [
            'nombre'=>'required',
                'apellidos'=>'required',
                    'telefono'=>'required',
                        'email'=>'required',
                            'direccion'=>'required',
                                'foto'=>'required',
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

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->input(), [
            'nombre'=>'required',
                'apellidos'=>'required',
                    'telefono'=>'required',
                        'email'=>'required',
                            'direccion'=>'required',
                                'foto'=>'required',
        ]);
        
        if($validator->fails()){
            return response()->json(['errors' => $validator->errors(),'res' => false]);
        }

        $cliente = Cliente::find($id);
        $cliente->fill($request->input());
        if($cliente->save()){
            return response()->json([
                'res' => true, 
                    'message' => "REGISTRO ACTUALIZADO CORRECTAMENTE, GRACIAS"], 200);   
        }else{
            return response()->json([
                'res' => true, 
                    'message' => "ERROR AL ACTUALIZAR EL REGISTRO, GRACIAS"], 200); 
        } 
    }


    public function destroy($id)
    {
        $dato = Cliente::find($id);
        if(!empty($dato)){
            $delete = $dato->delete();
            return response()->json([
                'res' => true, 
                    'message' => "REGISTRO ELIMINADO CORRECTAMENTE, GRACIAS"], 200);  
        }else{
            return response()->json([
                'res' => true, 
                    'message' => "REGISTRO NO EXISTE EN LA BASE DE DATOS, GRACIAS"], 200);
        }       
    }
}

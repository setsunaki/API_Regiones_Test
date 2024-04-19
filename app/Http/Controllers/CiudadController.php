<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    //Ciudades x id_provincia
    public function getByProvincia($id){
        try{
            $ciudad = Ciudad::where('id_provincia', $id)
            ->with('provincia')
            ->get();

            if($ciudad->isEmpty()){
                $data = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'No se encontraron ciudades!!'
                ];
            }else{
                $data = [
                    'code' => 200,
                    'status' => 'success',
                    'Ciudades' => $ciudad
                ];
            }
            return response()-> json($data, $data['code']);

        }catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}

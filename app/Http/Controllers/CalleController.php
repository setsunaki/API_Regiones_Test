<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calle;

class CalleController extends Controller
{
    //Calles x id_ciudad
    public function getByCiudad($id){
        try{
            $calle = Calle::where('id_ciudad', $id)
            ->with('ciudad')
            ->get();

            if($calle->isEmpty()){
                $data = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'No se encontraron calles!!'
                ];
            }else{
                $data = [
                    'code' => 200,
                    'status' => 'success',
                    'Calles' => $calle
                ];
            }

            return response()->json($data, $data['code']);
        }catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}

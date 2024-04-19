<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provincia;

class ProvinciaController extends Controller
{
    //Provincias x id_region
    public function getByRegion($id){
        try{
            $provincia = Provincia::where('id_region', $id)
            ->with('region')
            ->get();

            if($provincia->isEmpty()){
                $data = [
                    'code' => 404,
                    'status' => 'error',
                    'message' => 'No se encontraron provincias!!'
                ];
            }else{
                $data = [
                    'code' => 200,
                    'status' => 'success',
                    'Provincias' => $provincia
                ];
            }

            return response()-> json($data, $data['code']);

        }catch(\Throwable $th){
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}

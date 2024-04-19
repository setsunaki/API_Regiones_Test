<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    //Todas las regiones
    public function get(){
        try{
            $region = Region::all();

            if($region->isEmpty()){
                $data = [
                    'code' => 404,
                    'status' => 'error',
                    'Regiones' => 'No se encontraron'
                ];
                
            }else{
                $data = [
                    'code' => 200,
                    'status' => 'success',
                    'Regiones' => $region
                ];
            }

            return response()->json($data, $data['code']);

        }catch(\Trowable $th){
            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Itenerary;
use App\Models\City;

class IteneraryController extends Controller
{
    public function iteneraries(){
        $iteneraries = Itenerary::all();
        return response()->json([
            'data' => $iteneraries,
            'status' => 200
        ]);
    }

    public function singleItenerary($id){
        $iteneraries = Itenerary::where('id', $id)->first();
        if($iteneraries){
            return response()->json([
                'data' => $iteneraries,
                'status' => 200
            ]);
        }else{
            return response()->json([
                'message' => 'Itenerary Not Found',
                'status' => 200
            ]);
        }
    }

    public function searchByCity($city){
        $iteneraries = Itenerary::where('city', 'LIKE', $city)->get();
        if($iteneraries != '' || $iteneraries != NULL){
            return response()->json([
                'data' => $iteneraries,
                'status' => 200
            ]);
        }

        return response()->json([
            'message' => 'Itenerary Not Found',
            'status' => 200
        ]);
    }

    public function cityList(){
        $cities = City::all();
        if($cities == '' || $cities == null || $cities == '[]'){
            return response()->json([
                'message' => 'Cities Not Found!',
                'status' => 200
            ]);
        }else{
            return response()->json([
                'data' => $cities,
                'status' => 200
            ]);
        }
    }
}

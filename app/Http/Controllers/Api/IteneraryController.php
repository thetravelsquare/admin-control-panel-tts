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
        $i = [];
        foreach($iteneraries as $itenerary){
            $itenerary->ammenities = json_decode($itenerary->ammenities);
            $itenerary->photos_of_experience = json_decode($itenerary->photos_of_experience);
            $itenerary->tour_itenarary = json_decode($itenerary->tour_itenarary);

            array_push($i, $itenerary);
        }
        return response()->json([
            'data' => $i,
            'status' => 200
        ]);
    }

    public function singleItenerary($id){
        $iteneraries = Itenerary::where('id', $id)->first();

        $iteneraries->ammenities = json_decode($iteneraries->ammenities);
        $iteneraries->photos_of_experience = json_decode($iteneraries->photos_of_experience);
        $iteneraries->tour_itenarary = json_decode($iteneraries->tour_itenarary);

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
        $i = [];
        foreach($iteneraries as $itenerary){
            $itenerary->ammenities = json_decode($itenerary->ammenities);
            $itenerary->photos_of_experience = json_decode($itenerary->photos_of_experience);
            $itenerary->tour_itenarary = json_decode($itenerary->tour_itenarary);

            array_push($i, $itenerary);
        }

        if($i != '' || $i != NULL){
            return response()->json([
                'data' => $i,
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

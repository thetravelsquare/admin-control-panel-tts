<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('itenerary.cities', compact('cities'));
    }

    public function create(){
        return view('itenerary.add-city');
    }

    public function store(Request $request){
        try{
            $city = new City;
            $city->name = $request->name;
            if($city->save()){
                return back()->with('success', 'City Added Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', $e);
        }
    }

    public function edit($id){
        $city = City::where('id', $id)->first();
        return view('itenerary.edit-city', compact('city'));
    }
    public function update(Request $request, $id){
        try{
            $city = City::where('id', $id)->first();
            $city->name = $request->name;
            if($city->save()){
                return back()->with('success', 'City Updated Successfully');
            }
        }
        catch(Exception $e){
            return back()->with('error', $e);
        }
    }
}

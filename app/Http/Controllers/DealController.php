<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealController extends Controller
{
    public function index(){
        $deals = Deal::all();
        return view('deals', compact('deals'));
    }
}

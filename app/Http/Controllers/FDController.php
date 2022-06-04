<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FD;

class FDController extends Controller
{
    public function index(){
        $fds = FD::all();
        return view('fds', compact('fds'));
    }
}

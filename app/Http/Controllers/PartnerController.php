<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::all();
        return view('partner.all-partners', compact('partners'));
    }

    public function allAccounts(){
        $partners = Partner::all();
        return view('all-accounts', compact('partners'));
    }
}

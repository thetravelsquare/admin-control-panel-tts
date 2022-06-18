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

    public function approve($id){
        $partner = Partner::where('id', $id)->first();
        $partner->status = 'approved';
        if($partner->save()){
            return back()->with('success', 'Partner Approved Successfully');
        }
    }

    public function reject($id){
        $partner = Partner::where('id', $id)->first();
        $partner->status = 'disapproved';
        if($partner->save()){
            return back()->with('error', 'Partner Rejected Successfully');
        }
    }
}

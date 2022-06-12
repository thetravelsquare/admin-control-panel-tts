<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class RefundController extends Controller
{
    public function index(){
        $rqs = Refund::orderBy('status', 'desc')->orderBy('created_at', 'desc')->get();
        return view('refund-requests', compact('rqs'));
    }

    public function approve($id){
        $rq = Refund::where('id', $id)->first();
        $rq->status = 'completed';
        if($rq->save()){
            return back()->with('success', 'Refund Request has been completed');
        }
    }

    public function initiate($id){
        $rq = Refund::where('id', $id)->first();
        $rq->status = 'initiated';
        if($rq->save()){
            return back()->with('success', 'Refund Request has been initiated');
        }
    }


    public function reject($id){
        $rq = Refund::where('id', $id)->first();
        $rq->status = 'rejected';
        if($rq->save()){
            return back()->with('success', 'Refund Request has been rejected');
        }
    }
}

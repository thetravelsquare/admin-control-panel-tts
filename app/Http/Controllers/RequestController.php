<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\PaymentRequest;
use App\Models\SettlementRequest;
use App\Models\GroupFareRequest;
use App\Models\PartnerGroupFareRequest;


class RequestController extends Controller
{
    public function ppcRequests(){
        $ppc_requests = ContactForm::where('for_', 'ppc-request')->get();
        return view('requests.ppc-requests', compact('ppc_requests'));
    }

    public function generalRequests(){
        $general_requests = ContactForm::where('for_', 'general-request')->get();
        return view('requests.general-requests', compact('general_requests'));
    }

    public function businessRequests(){
        $business_requests = ContactForm::where('for_', 'business-request')->get();
        return view('requests.business-requests', compact('business_requests'));
    }

    public function paymentRequests(){
        $payment_requests = PaymentRequest::orderBy('created_at', 'desc')->get();
        return view('requests.payment-requests', compact('payment_requests'));
    }

    public function groupFareRequests(){
        $group_fare_requests = GroupFareRequest::orderBy('created_at', 'desc')->get();
        return view('requests.group-fare-requests', compact('group_fare_requests'));
    }

    public function partnerGroupFareRequests(){
        $group_fare_requests = PartnerGroupFareRequest::orderBy('created_at', 'desc')->get();
        return view('requests.partner-group-fare-requests', compact('group_fare_requests'));
    }

    public function updateFareGF($id, Request $request){
        $group_fare_request = GroupFareRequest::find($id);
        
        $group_fare_request->fare = $request->fare;
        $group_fare_request->save();
        return redirect()->back()->with('success', 'Fare updated successfully');
    }

    public function updatePartnerFareGF($id, Request $request){
        $group_fare_request = PartnerGroupFareRequest::find($id);
        
        $group_fare_request->fare = $request->fare;
        $group_fare_request->save();
        return redirect()->back()->with('success', 'Fare updated successfully');
    }
    public function settlementRequests(){
        $settlement_requests = SettlementRequest::orderBy('created_at', 'desc')->get();
        return view('requests.settlement-requests', compact('settlement_requests'));
    }

    public function processing($id){
        $rq = SettlementRequest::where('id', $id)->first();
        $rq->status = 'PROCESSING';
        if($rq->save()){
            return back()->with('success', 'Settlement Request has been processed');
        }
    }

    public function settled($id){
        $rq = SettlementRequest::where('id', $id)->first();
        $rq->status = 'SETTLED';
        if($rq->save()){
            return back()->with('success', 'Settlement Request has been settled');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PartnerFD;
use App\Models\FD;

class FDController extends Controller
{
    public function index(){
        $fds = FD::all();
        return view('fds', compact('fds'));
    }

    public function partnerFD(){
        $fds = PartnerFD::all();
        return view('partner-fds', compact('fds'));
    }

    public function domestic(){
        $domestic_fd = FD::where('international_or_domestic', 'domestic')->get();
        return view('domestic', compact('domestic_fd'));
    }
    
    public function international(){
        $international_fd = FD::where('international_or_domestic', 'international')->get();
        return view('international', compact('international_fd'));
    }

    public function fileImportExport()
    {
       return view('admin.file-import');
    }

    public function fileImport(Request $request){
        Excel::import(new FDImport, $request->file('file')->store('temp'));
        return back()->with('success', 'FDs Uploaded Successfully');
    }


    public function partnerDomesticFD(){
        $domestic_fd = PartnerFD::where('international_or_domestic', 'domestic')->get();
        return view('fds.domestic', compact('domestic_fd'));
    }
    
    public function PartnerInternationalFD(){
        $international_fd = PartnerFD::where('international_or_domestic', 'international')->get();
        return view('international', compact('international_fd'));
    }

    public function PartnerFileImportExportFD()
    {
       return view('admin.file-import');
    }

    public function PartnerFileImportFD(Request $request){
        Excel::import(new PartnerFDImport, $request->file('file')->store('temp'));
        return back()->with('success', 'FDs Uploaded Successfully');
    }

    public function createPartnerFD(){
        $fds = PartnerFD::orderBy('id', 'desc')->get();
        return view('fds.add-partner-fd', compact('fds'));
    }

     
    public function addPartnerFD(Request $request){
        $validate = $request->validate([
            'airline' => 'required',
            'flight_no' => 'required',
            'departure_from' => 'required',
            'arrival_to' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'journey_type' => 'required',
            'flight_type' => 'required',
            'baggage_policy' => 'required',
            'fd_id' => 'required',
            'sector' => 'required',
            'international_or_domestic' => 'required',
            'adult_fare' => 'required',
            'service_fee' => 'required',
            'fare_type' => 'required',
            'rescheduling_fee' => 'required',
            'cancellation_fee' => 'required',
        ]);

        $fd = new PartnerFD;
        $fd->airline = $request->airline;
        $fd->flight_no = $request->flight_no;
        $fd->departure_from = $request->departure_from;
        $fd->arrival_to = $request->arrival_to;
        $fd->departure_time = $request->departure_time;
        $fd->arrival_time = $request->arrival_time;
        $fd->departure_date = $request->departure_date;
        $fd->arrival_date = $request->arrival_date;
        $fd->journey_type = $request->journey_type;
        $fd->flight_type = $request->flight_type;
        $fd->baggage_policy = $request->baggage_policy;
        $fd->fd_id = $request->fd_id;
        $fd->sector = $request->sector;
        $fd->international_or_domestic = $request->international_or_domestic;
        $fd->adult_fare = $request->adult_fare;
        $fd->child_fare = $request->child_fare;
        $fd->service_fee = $request->service_fee;
        $fd->fare_type = $request->fare_type;
        $fd->rescheduling_fee = $request->rescheduling_fee;
        $fd->cancellation_fee = $request->cancellation_fee;
        if($fd->save()){
            return back()->with('success', 'Fixed Departure Added');
        }
    }

    public function editPartnerFD($id){
        $fds = PartnerFD::where('id', $id)->first();
        return view('fds.edit-partner-fd', compact('fds'));
    }

    public function updatePartnerFD(Request $request, $id){
        $validate = $request->validate([
            'airline' => 'required',
            'flight_no' => 'required',
            'departure_from' => 'required',
            'arrival_to' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'journey_type' => 'required',
            'flight_type' => 'required',
            'baggage_policy' => 'required',
            'fd_id' => 'required',
            'sector' => 'required',
            'international_or_domestic' => 'required',
            'adult_fare' => 'required',
            'service_fee' => 'required',
            'fare_type' => 'required',
            'rescheduling_fee' => 'required',
            'cancellation_fee' => 'required',
        ]);

        $fd = PartnerFD::where('id', $id)->first();
        $fd->airline = $request->airline;
        $fd->flight_no = $request->flight_no;
        $fd->departure_from = $request->departure_from;
        $fd->arrival_to = $request->arrival_to;
        $fd->departure_time = $request->departure_time;
        $fd->arrival_time = $request->arrival_time;
        $fd->departure_date = $request->departure_date;
        $fd->arrival_date = $request->arrival_date;
        $fd->journey_type = $request->journey_type;
        $fd->flight_type = $request->flight_type;
        $fd->baggage_policy = $request->baggage_policy;
        $fd->fd_id = $request->fd_id;
        $fd->sector = $request->sector;
        $fd->international_or_domestic = $request->international_or_domestic;
        $fd->adult_fare = $request->adult_fare;
        $fd->child_fare = $request->child_fare;
        $fd->service_fee = $request->service_fee;
        $fd->fare_type = $request->fare_type;
        $fd->rescheduling_fee = $request->rescheduling_fee;
        $fd->cancellation_fee = $request->cancellation_fee;
        if($fd->save()){
            return back()->with('success', 'Fixed Departure Added');
        }
    }
}

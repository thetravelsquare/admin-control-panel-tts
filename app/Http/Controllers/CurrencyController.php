<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\CurrencyTracker;

class CurrencyController extends Controller
{
    public function index(){
        $currencies = Currency::all();
        $allCurrencyTracker = CurrencyTracker::all();
        $countCurrency = count($currencies);
        $countCurrencyTracker = count($allCurrencyTracker);
        return view('currency', compact('currencies', 'allCurrencyTracker', 'countCurrency', 'countCurrencyTracker'));
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'symbol' => 'required'
        ]);

        $currency = new Currency;
        $currency->name = $request->name;
        $currency->symbol = $request->symbol;
        if($currency->save()){
            return back()->with('success', 'New Currency Added');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function currencyTracker(Request $request){
        $validate = $request->validate([
            'currency_to' => 'required',
            'currency_from' => 'required',
            'points' => 'required',
        ]);
        $currency = new CurrencyTracker;
        $currency->currency_to = $request->currency_to;
        $currency->currency_from = $request->currency_from;
        $currency->points = $request->points;
        $result1 = CurrencyTracker::where("currency_to", $request->currency_to)->first();
        $result2 = CurrencyTracker::where("currency_from", $request->currency_from)->first();
        if(isset($result1->currency_to) == $request->currency_to && isset($result2->currency_from) == $request->currency_from){
            dd('xxx');
        }
        if($currency->save()){
            return back()->with('success', 'New Currency Added');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function edit($id){
        $currencyTracker = CurrencyTracker::where('id', $id)->first();
        $currencies = Currency::all();
        return view('currency-editor', compact('currencies', 'currencyTracker'));
    }

    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required',
            'symbol' => 'required'
        ]);
        $currency = Currency::where('id', $id)->first();
        $currency->name = $request->name;
        $currency->symbol = $request->symbol;
        if($currency->save()){
            return back()->with('success', 'Currency Updated');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function updateCurrencyValue(Request $request, $id){
        $validate = $request->validate([
            'currency_to' => 'required',
            'currency_from' => 'required',
            'points' => 'required',
        ]);

        $currency = CurrencyTracker::where('id', $id)->first();
        $currency->currency_to = $request->currency_to;
        $currency->currency_from = $request->currency_from;
        $currency->points = $request->points;
        if($currency->save()){
            return redirect()->route('currency')->with('Currency Value Update Successfully');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }
}

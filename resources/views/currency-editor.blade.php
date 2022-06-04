@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Currency</h1><span class="ml-2 small text-left">(First Add Currency Then Add Currency Tracker)</span>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <form action="{{ route('currency-value-editor', $currencyTracker->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <select name="currency_to" id="" class="form-control">
                        <option value="">Select Currency To</option>
                        @foreach ($currencies as $currency)
                            <option @if($currency->id == $currencyTracker->currency_to) selected @endif value="{{ $currency->id }}">{{ $currency->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="currency_from" id="" class="form-control">
                        <option value="">Select Currency From</option>
                        @foreach ($currencies as $currency)
                            <option @if($currency->id == $currencyTracker->currency_from) selected @endif value="{{ $currency->id }}">{{ $currency->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" name="points" placeholder="Points" value="{{ $currencyTracker->points }}" class="form-control">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-dark btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection

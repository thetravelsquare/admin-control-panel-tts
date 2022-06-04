<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Currency</h1><span class="ml-2 small text-left">(First Add Currency Then Add
                Currency Tracker)</span>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <form action="{{ route('currency') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="name" placeholder="Currency Name" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="text" name="symbol" placeholder="Currency Symbol" class="form-control">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-dark btn-block">Submit</button>
                </div>
            </div>
        </form>

        <hr>

        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
            <h1 class="h3 mb-0 text-gray-800">Currency Tracker</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <form action="{{ route('currency-tracker') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <select name="currency_to" id="" class="form-control">
                        <option value="">Select Currency To</option>
                        @foreach ($currencies as $currency)
                            <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="currency_from" id="" class="form-control">
                        <option value="">Select Currency From</option>
                        @foreach ($currencies as $currency)
                            <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="text" name="points" placeholder="Points" class="form-control">
                </div>
                <div class="col-md-3">
                    <button class="btn btn-dark btn-block">Submit</button>
                </div>
            </div>
        </form>

        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Currencies</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Symbol</th>
                                @if($countCurrencyTracker == $countCurrency)
                                    <th>INR Value</th>
                                @endif
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currencies as $currency)
                            <?php
                                $currencyValue = App\Models\CurrencyTracker::where('currency_to', $currency->id)->first();
                                // dd($currencyValue);  
                            ?>
                                <tr>
                                    <td>{{ $currency->id }}</td>
                                    <td>{{ $currency->name }}</td>
                                    <td>{{ $currency->symbol }}</td>
                                    @if($countCurrencyTracker == $countCurrency)
                                        <td>{{ $currencyValue->points }}</td>
                                    @endif
                                    <td>
                                        <button data-toggle="modal" data-target="#currencyModal-{{ $currency->id }}"
                                            class="btn btn-dark">Edit Currency</button>
                                            @if($countCurrencyTracker == $countCurrency)
                                                <a href="{{ route('currency-value-editor', $currencyValue->id) }}"
                                            class="btn btn-dark">Edit Currency Value</a>
                                            @endif
                                    </td>
                                </tr>

                                <div class="modal" id="currencyModal-{{ $currency->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Currency</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('currency-editor', $currency->id) }}" method="post">
                                                    @csrf
                                                    <div class="col m-2">
                                                        <input type="text" name="name" placeholder="Currency Name"
                                                            value="{{ $currency->name }}" class="form-control">
                                                    </div>
                                                    <div class="col m-2">
                                                        <input type="text" name="symbol" placeholder="Currency Symbol"
                                                            value="{{ $currency->symbol }}" class="form-control">
                                                    </div>
                                                    <div class="col m-2">
                                                        <button class="btn btn-dark btn-block">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

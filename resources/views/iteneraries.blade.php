<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Iteneraries</h1>
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Iteneraries</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Experience Name</th>
                                <th>City</th>
                                <th>Subcity</th>
                                <th>Category</th>
                                <th>Experience Slot</th>
                                <th>Experience Duration</th>
                                <th>Transfers</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($iteneraries as $itenerary)
                           <tr>
                                <td>{{ $itenerary->experience_name }}</td>
                                <td>{{ $itenerary->city }}</td>
                                <td>{{ $itenerary->sub_city }}</td>
                                <td>{{ $itenerary->category }}</td>
                                <td>{{ $itenerary->experience_slot }}</td>
                                <td>{{ $itenerary->experience_duration }}</td>
                                <td>{{ $itenerary->transfers }}</td>
                                <td><a class="btn btn-dark" href="{{ route('itenerary-details', $itenerary->id) }}">Details</a></td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

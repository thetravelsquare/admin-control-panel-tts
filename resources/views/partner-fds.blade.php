<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All FD's</h1>
        </div>
        <div class="text-right">
            <a href="{{ route('add-partner-fds') }}" class="btn btn-dark">Add New FD</a>
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All FD's</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Airline</th>
                                <th>Flight No</th>
                                <th>Departure From</th>
                                <th>Arrival To</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Departure Date</th>
                                <th>Arrival Date</th>
                                <th>Journey Type</th>
                                <th>Flight Type</th>
                                <th>Baggage Policy</th>
                                <th>FD ID</th>
                                <th>Sector</th>
                                <th>International or Domestic</th>
                                <th>Adult Fare</th>
                                <th>Child Fare</th>
                                <th>Service Fee</th>
                                <th>Fare Type</th>
                                <th>Rescheduling Fee</th>
                                <th>Cancellation Fee</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fds as $fd)
                            <tr>
                                <td>{{ $fd->id }}</td>
                                <td>{{ $fd->airline }}</td>
                                <td>{{ $fd->flight_no }}</td>
                                <td>{{ $fd->departure_from }}</td>
                                <td>{{ $fd->arrival_to }}</td>
                                <td>{{ $fd->departure_time }}</td>
                                <td>{{ $fd->arrival_time }}</td>
                                <td>{{ $fd->departure_date }}</td>
                                <td>{{ $fd->arrival_date }}</td>
                                <td>{{ $fd->journey_type }}</td>
                                <td>{{ $fd->flight_type }}</td>
                                <td>{{ $fd->baggage_policy }}</td>
                                <td>{{ $fd->fd_id }}</td>
                                <td>{{ $fd->sector }}</td>
                                <td>{{ $fd->international_or_domestic }}</td>
                                <td>{{ $fd->adult_fare }}</td>
                                <td>{{ $fd->child_fare }}</td>
                                <td>{{ $fd->service_fee }}</td>
                                <td>{{ $fd->fare_type }}</td>
                                <td>{{ $fd->rescheduling_fee }}</td>
                                <td>{{ $fd->cancellation_fee }}</td>
                                <td>{{ $fd->created_at }}</td>
                                <td>{{ $fd->updated_at }}</td>
                                <td><a href="{{ route('edit-partner-fd', $fd->id) }}" class="btn btn-dark">Update</a></td>
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

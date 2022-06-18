<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All bookings</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Bookings</h6>
            </div>
            <div class="card-body">
            @if(Session::get('success'))
                <script>
                    setTimeout(function() {
                        $('.alert').fadeOut(1000);
                    }, 10000);
                </script>
                <div class="alert alert-success">
                    {{ session::get('success') }}
                </div>
            @endif
            @if(Session::get('error'))
                <script>
                    setTimeout(function() {
                        $('.alert').fadeOut(1000);
                    }, 10000);
                </script>
                <div class="alert alert-danger">
                    {{ session::get('error') }}
                </div>
            @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Amount</th> 
                                <th>Fligth PNR</th> 
                                <th>Flight Name</th>
                                <th>Flight Booking ID</th>
                                <th>Payment Type</th>
                                <th>Payment Status </th>
                                <th>Payment Details</th>
                                <th>Payment Requests</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->headline }}</td>
                                <td>{{ $booking->amount }}</td> 
                                <td>{{ $booking->flight_pnr }}</td> 
                                <td>{{ $booking->flight_name }}</td> 
                                <td>{{ $booking->flight_booking_id }}</td> 
                                <td>{{ $booking->payment_type }}</td> 
                                <td>{{ $booking->payment_status }}</td> 
                                <td>{{ $booking->Payment_details     }}</td> 
                                <td>{{ $booking->payment_request }}</td> 
                                <td><button class="btn btn-dark" data-toggle="modal" data-target="#bookingModal-{{ $booking->id }}">Details</button></td>
                            </tr>
                            <div class="modal" id="bookingModal-{{ $booking->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Booking Details</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col m-2">
                                                <div class="form-group">
                                                <label for="pnr" class="small pb-0 mb-0">PNR</label>
                                                <input type="text" name="headline" placeholder="booking Headline" value="{{ json_decode($booking->all_data)->PNR }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <h5 for="flight-details">Flight Details</h5>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="ArrTime" class="small pb-0 mb-0">ArrTime</label>
                                                    <input type="text" name="headline" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->ArrTime }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="DepTime" class="small pb-0 mb-0">DepTime</label>
                                                    <input type="text" name="DepTime" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->DepTime }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="Duration" class="small pb-0 mb-0">Duration</label>
                                                    <input type="text" name="Duration" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->Duration }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="Destination" class="small pb-0 mb-0">Destination</label>
                                                    <input type="text" name="Destination" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->Destination->CityName }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="Terminal" class="small pb-0 mb-0">Terminal</label>
                                                    <input type="text" name="Terminal" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->Destination->Terminal }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="Origin" class="small pb-0 mb-0">Origin</label>
                                                    <input type="text" name="Origin" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->Origin->CityName }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="Terminal" class="small pb-0 mb-0">Terminal</label>
                                                    <input type="text" name="Origin" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->Origin->Terminal }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="StopOver" class="small pb-0 mb-0">StopOver</label>
                                                    <input type="text" name="StopOver" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->StopOver }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col m-2">
                                                <div class="form-group">
                                                    <label for="StopOver" class="small pb-0 mb-0">StopOver</label>
                                                    <input type="text" name="StopOver" value="{{ json_decode($booking->all_data)->FlightItinerary->Segments[0]->StopOver }}" class="form-control">
                                                </div>
                                            </div>
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

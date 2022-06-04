<?php // echo $countCurrencyTracker; die; ?>
@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Blogs</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Blogs</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>New Price</th> 
                                <th>Old Price</th>
                                <th>No Of Days</th>
                                <th>No Of Nights</th>
                                <th>Date Of Travel</th>
                                <th>Destination</th>
                                <th>Valid Till</th>
                                <th>Hotel Name</th>
                                <th>Flight Type</th>
                                <th>Package Type</th>
                                <th>Inclusion</th>
                                <th>Status</th>
                                <th>Verified</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deals as $deal)
                            <tr>
                                <td>{{ $deal->id }}</td>
                                <td>{{ $deal->title }}</td>
                                <td>{{ $deal->new_price }}</td>
                                <td>{{ $deal->old_price }}</td>
                                <td>{{ $deal->noofdays }}</td>
                                <td>{{ $deal->noofnights }}</td>
                                <td>{{ $deal->dates_of_travel }}</td>
                                <td>{{ $deal->destination }}</td>
                                <td>{{ $deal->valid_untill }}</td>
                                <td>{{ $deal->hotel_name_room_meal }}</td>
                                <td>{{ $deal->flight_trip_type }}</td>
                                <td>{{ $deal->package_type }}</td>
                                <td>{{ $deal->inclusion }}</td>
                                <td>{{ $deal->status }}</td>
                                <td>{{ $deal->is_verified }}</td> 
                                <td><button class="btn btn-dark" data-toggle="modal" data-target="#blogModal-{{ $deal->id }}">Details</button></td>
                            </tr>
                            <div class="modal" id="blogModal-{{ $deal->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Approve Blog</h4>
                                            <button type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form action="{{ route('currency-editor', $blog->id) }}" method="post"> --}}
                                                @csrf
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="id_tag">ID Tag</label>
                                                    <input readonly type="text" name="id_tag" placeholder="Blog Headline"
                                                        value="{{ $deal->id_tag }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="partner_id">Partner ID</label>
                                                    <input readonly type="text" name="partner_id	" placeholder="Blog"
                                                        value="{{ $deal->partner_id	 }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="deal_type_id">Deal Type ID</label>
                                                    <input readonly type="text" name="deal_type_id" placeholder="Blog"
                                                        value="{{ $deal->deal_type_id }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="title">Title</label>
                                                    <input readonly type="text" name="title" placeholder="Blog"
                                                        value="{{ $deal->title }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="currency_id">Currency ID</label>
                                                    <input readonly type="text" name="currency_id" placeholder="Blog"
                                                        value="{{ $deal->currency_id }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="new_price">New Price</label>
                                                    <input readonly type="text" name="new_price" placeholder="Blog"
                                                        value="{{ $deal->new_price }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="old_price">Old Price</label>
                                                    <input readonly type="text" name="old_price" placeholder="Blog"
                                                        value="{{ $deal->old_price }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="noofdays">No Of Days</label>
                                                    <input readonly type="text" name="noofdays" placeholder="Blog"
                                                        value="{{ $deal->noofdays }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="noofnights">No Of Nights</label>
                                                    <input readonly type="text" name="noofnights" placeholder="Blog"
                                                        value="{{ $deal->noofnights }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="tac">TAC</label>
                                                    <input readonly type="text" name="tac" placeholder="Blog"
                                                        value="{{ $deal->tac }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="unit_type">Unit Type</label>
                                                    <input readonly type="text" name="unit_type" placeholder="Blog"
                                                        value="{{ $deal->unit_type }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="details">Details</label>
                                                    <input readonly type="text" name="details" placeholder="Blog"
                                                        value="{{ $deal->details }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="cancelation_policy">Cancellation Policy</label>
                                                    <input readonly type="text" name="cancelation_policy" placeholder="Blog"
                                                        value="{{ $deal->cancelation_policy }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="dates_of_travel">Dates Of Travel</label>
                                                    <input readonly type="text" name="dates_of_travel" placeholder="Blog"
                                                        value="{{ $deal->dates_of_travel }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="destination">Destination</label>
                                                    <input readonly type="text" name="destination" placeholder="Blog"
                                                        value="{{ $deal->destination }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="valid_untill">Valid Till</label>
                                                    <input readonly type="text" name="valid_untill" placeholder="Blog"
                                                        value="{{ $deal->valid_untill }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="hotel_name_room_meal">Hotel Name</label>
                                                    <input readonly type="text" name="hotel_name_room_meal" placeholder="Blog"
                                                        value="{{ $deal->hotel_name_room_meal }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="flight_trip_type">Flight Trip Type</label>
                                                    <input readonly type="text" name="flight_trip_type" placeholder="Blog"
                                                        value="{{ $deal->flight_trip_type }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="package_type">Package Type</label>
                                                    <input readonly type="text" name="package_type" placeholder="Blog"
                                                        value="{{ $deal->package_type }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="inclusion">Inclusion</label>
                                                    <input readonly type="text" name="inclusion" placeholder="Blog"
                                                        value="{{ $deal->inclusion }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="status">Status</label>
                                                    <input readonly type="text" name="status" placeholder="Blog"
                                                        value="{{ $deal->status }}" class="form-control">
                                                </div>
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for="is_verified">Is Verified</label>
                                                    <input readonly type="text" name="is_verified" placeholder="Blog"
                                                        value="{{ $deal->is_verified }}" class="form-control">
                                                </div>
                                                
                                                <div class="col m-2">
                                                    <label class="mb-0 small font-weight-bold pb-0" for=""></label>
                                                    <butto readonlyn class="btn btn-dark btn-block">Submit</butto>
                                                </div>
                                            {{-- </form> --}}
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

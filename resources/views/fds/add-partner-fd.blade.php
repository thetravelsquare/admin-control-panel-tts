@extends('layouts.header')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add FD's</h1>
    </div>
    <div class="text-right"><a href="{{ route('partner-fds') }}" class="btn btn-dark">Go Back</a></div>

    <hr>
    <div class="card shadow mb-4 p-4">
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!--Begin::Dashboard 1-->
    <!--Begin::Row-->
    <div class="row">
        <div class="col-lg-12 col-xl-12 ">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Add Fixed Departure
                        </h3>
                    </div>
                </div>
                @if (Session::get('success'))
                    <script>
                        setTimeout(function() {
                            $('.alert').fadeOut(1000);
                            // $('.feedback').hide(1000); // you can also try this
                        }, 10000);
                    </script>
                    <div class="alert alert-success">
                        {{ session::get('success') }}
                    </div>
                @endif
                <!--begin::Form-->
                <form action="{{ route('add-partner-fds') }}" class="kt-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                    <div class="kt-portlet__body">
                    <p></p>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Airline</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="airline" value="{{ old('airline') }}" id='example-number-input'>
                                @error('airline') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Flight Number</label>
                            <div class="col-6">
                                <input class="form-control" type="text"  name="flight_no" value="{{ old('flight_no') }}" id="example-number-input">
                                @error('flight_no') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Departure(From)</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="departure_from" value="{{ old('departure_from') }}" id="example-number-input">
                                @error('departure_from') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Arrival(To)</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="arrival_to" value="{{ old('arrival_to') }}" id="example-number-input">
                                @error('arrival_to') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Departure Time </label>
                            <div class="col-6">
                                <input class="form-control" type="time" name="departure_time" value="{{ old('departure_time') }}" id="example-number-input">
                                @error('departure_time') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Arrival Time</label>
                            <div class="col-6">
                                <input class="form-control" type="time" name="arrival_time" value="{{ old('arrival_time') }}" id="example-number-input">
                                @error('arrival_time') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Departure Date</label>
                            <div class="col-6">
                                <input class="form-control" type="date" name="departure_date" value="{{ old('departure_date') }}" id="example-number-input">
                                @error('departure_date') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Arrival Date</label>
                            <div class="col-6">
                                <input class="form-control" type="date" name="arrival_date" value="{{ old('arrival_date') }}" id="example-number-input">
                                @error('arrival_date') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Journey Type</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="journey_type" value="{{ old('journey_type') }}" id="example-number-input">
                                @error('journey_type') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Flight Type</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="flight_type" value="{{ old('flight_type') }}" id="example-number-input">
                                @error('flight_type') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Baggage Policy</label>
                            <div class="col-6">
                                <!-- <input class="form-control" type="text" name="baggage_policy" id="example-number-input" /> -->
                                <textarea name="baggage_policy" id="" cols="30" rows="5">{{ old('baggage_policy') }}</textarea>
                                @error('baggage_policy') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">FD ID</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="fd_id" value="{{ old('fd_id') }}" id="example-number-input">
                                @error('fd_id') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Sector</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="sector" value="{{ old('sector') }}" id="example-number-input">
                                @error('sector') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">International/Domestic</label>
                            <div class="col-6">
                            <div class="form-group">
                                <!-- <label>Select Number of Passengers</label> -->
                                <div></div>
                                <select name="international_or_domestic" class="custom-select form-control" required>
                                    <option value="" selected="selected">Select</option>
                                    <option value="International">International</option>
                                    <option value="Domestic">Domestic</option>
                                </select>
                                @error('international_or_domestic') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Adult Fare</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="adult_fare" value="{{ old('adult_fare') }}" id="example-number-input">
                                @error('adult_fare') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Child Fare</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="child_fare" value="{{ old('child_fare') }}" id="example-number-input">
                                @error('child_fare') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Service Fee</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="service_fee" value="{{ old('service_fee') }}" id="example-number-input">
                                @error('service_fee') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Fare Type</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="fare_type" value="{{ old('fare_type') }}" id="example-number-input">
                                @error('fare_type') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Rescheduling Fee</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="rescheduling_fee" value="{{ old('rescheduling_fee') }}" id="example-number-input">
                                @error('rescheduling_fee') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-2 col-form-label">Enter Cancellation Fee</label>
                            <div class="col-6">
                                <input class="form-control" type="text" name="cancellation_fee" value="{{ old('cancellation_fee') }}" id="example-number-input">
                                @error('cancellation_fee') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-dark">Add Fixed Departure</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->

        </div>
    </div>
    <!--End::Row-->
    <!--Begin::Row-->
    
    <!--End::Row-->
    <!--End::Dashboard 1-->	
</div>
</div>
@endsection
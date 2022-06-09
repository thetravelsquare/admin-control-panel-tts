@extends('layouts.header')
@section('content')
    <div class="container-fluid">

                                        <form action="{{ route('add-post-itenerary') }}" class="kt-form" method="post" accept-charset="utf-8">
                                    
                                        @csrf
                                            <div class="kt-portlet__body">
                                            <p></p>
                                                

                                            @if(Session::has('success'))
                                                <div class="alert alert-success">
                                                    {{session('success')}}
                                                </div>
                                            @endif
                                                <div class="kt-section kt-section--first">
                                                    

										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Experience Name</label>
										<div class="col-6">
										<input class="form-control" type="text" name="experience_name" placeholder="Experience Name" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">City</label>
										<div class="col-6">
										<select name="city" class="custom-select form-control"  required>
											<option value="">Select</option>
											@foreach($cities as $city)
											<option value="{{ $city->name }}">{{ $city->name }}</option>
											@endforeach
										</select>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Subcity</label>
										<div class="col-6">
											<input type="text" name="sub_city" placeholder="Subcity" class="form-control">
										<!-- <select name="sub_city" class="custom-select form-control" required>
											<option value="">Select</option>
											<option value="Abu Dhabi">Abu Dhabi</option>
											<option value="Sumberkima">Sumberkima</option>
											<option value="Gokarna">Gokarna</option>
										</select> -->
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Category</label>
										<div class="col-6">
										<select name="category" class="custom-select form-control" required>
                                                            <option value="">Select</option>
										<option  value="Adventure">Adventure</option>
										<option value="Romantic">Romantic</option>
										<option value="Family Travel">Family Travel</option>
										</select>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Experience Slot</label>
										<div class="col-6">
										<select name="experience_slot" class="custom-select form-control" required>
                                                        <option value="">Select</option>
										<option value="Evening">Evening </option>
										<option value="Morning">Morning</option>
										<option value="After-Noon">After-Noon</option>
										<option value="Morning - Afternoon">Morning - Afternoon</option>
										<option value="Afternoon - Evening">Afternoon - Evening </option>
										<option value="Morning - Evening">Morning - Evening </option>
										</select>
										</div>
										</div>
										
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Experience Duration</label>
										<div class="col-6">
										<select name="experience_duration" class="custom-select form-control" required>
                                                        <option value="">Select</option>
										<option value="Half Day">Half Day</option>
										<option value="Quarter Day">Quarter Day</option>
										<option value="Full Day">Full Day</option>
										</select>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Transfers</label>
										<div class="col-6">
										<select name="transfers" class="custom-select form-control" required>
                                                        <option value="">Select</option>
										<option value="Included">Included </option>
										<option value="Not Included">Not Included</option>
										</select>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Group Type</label>
										<div class="col-6">
										<select name="group_type" class="custom-select form-control" required>
                                                            <option value="">Select</option>
										<option value="Shared">Shared </option>
										<option value="Semi-Private">Semi-Private</option>
										<option value="Private">Private </option>
										</select>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Confirmation Type</label>
										<div class="col-6">
										<select name="confirmation_type" class="custom-select form-control" required>
                                                            <option value="">Select</option>
										<option value="Late-Confirmation">Late-Confirmation</option>
										<option value="Instant">Instant</option>
										</select>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ammenities</label>
										<div class="col-4">
										<input name="ammenities[]" class="form-control" type="text" placeholder="Ammenities" value="" id="input" required />
										</div>
										</div>
										
										<div class="amenities-items"></div>
                                        <div class="text-center mb-2">
                                            <button id="add-more-amenities" class="btn btn-dark" type="button">Add More Amenities</button>
                                        </div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Photos Of Experience</label>
										<div class="col-4">
										<input name="photos_of_experience[]" class="form-control" type="text" placeholder="Photos Of Experience" value="" id="input" required />
										</div>
										</div>
										{{-- <div class="form-group row">
										<label for="input" class="col-2 col-form-label"></label>
										<div class="col-4">
										<input name="photos_of_experience[]" class="form-control" type="text" placeholder="Photos Of Experience" value="" id="input" />
										</div>
										</div> --}}
                                                    <div class="image-items"></div>
                                        <div class="text-center mb-2">
										    <button class="btn btn-dark" id="add-more-image" type="button">Add More Photos</button>
                                        </div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Experience Video</label>
										<div class="col-6">
										<input name="experience_video" class="form-control" type="text" placeholder="Experience Video" value="" id="input" required />
										</div>
										</div>
                                                    
                                                    <div class="form-group row">
										<label for="input" class="col-2 col-form-label">Experience Address </label>
										<div class="col-6">
										<input name="experience_address" class="form-control" type="text" placeholder="Experience Address" value="" id="input"  required/>
										</div>
										</div>

										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Timmings</label>
										<div class="col-6">
										<input name="timmings" class="form-control" type="text" placeholder="Timmings" value="" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">What to Expect (Description)</label>
										<div class="col-6">
										<input name="what_to_expect" class="form-control" type="text" placeholder="What to Expect (Description)" value="" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">About Experience</label>
										<div class="col-6">
										<input name="about_experience" class="form-control" type="text" placeholder="About Experience" value="" id="input" required />
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">What To Bring</label>
										<div class="col-6">
										<input name="what_to_bring" class="form-control" type="text" placeholder="What To Bring" value="" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Booking Confirmation</label>
										<div class="col-6">
										<input name="booking_confirmation" class="form-control" type="text" placeholder="Booking Confirmation" value="" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Meetup Information</label>
										<div class="col-6">
										<input name="meetup_information" class="form-control" type="text" placeholder="Meetup Information" value="" id="input" required />
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Terms & Conditions</label>
										<div class="col-6">
										<input name="terms_and_condition" class="form-control" type="text" placeholder="Terms & Conditions" value="" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Package Exclusions</label>
										<div class="col-6">
										<input name="package_exclusion" class="form-control" type="text" placeholder="Package Exclusions" value="" id="input"  required/>
										</div>
										</div>
										
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Cancellation Policy</label>
										<div class="col-6">
										<input name="cancellation_policy" class="form-control" type="text" placeholder="Cancellation Policy" value="" id="input"  required/>
										</div>
										</div>
										
										<label for="input" class="col-2 col-form-label">Tour Itinerary</label>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Day 1</label>
										<div class="col-4">
										<input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 1" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Day 2</label>
										<div class="col-4">
										<input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 2" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Day 3</label>
										<div class="col-4">
										<input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 3" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Day 4</label>
										<div class="col-4">
										<input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 4" value="" id="input" />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Day 5</label>
										<div class="col-4">
										<input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 5" value="" id="input" />
										</div>
										</div>
										
										<label for="input" class="col-2 col-form-label">Ticket Package 1</label>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ticket Type</label>
										<div class="col-4">
										<input name="ticket_type_1" class="form-control" type="text" placeholder="Ticket Type" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Time Duration</label>
										<div class="col-4">
										<input name="time_duration_1" class="form-control" type="text" placeholder="Time Duration" value="" id="input"  required/>
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Price </label>
										<div class="col-4">
										<input name="price_1" class="form-control" type="text" placeholder="Price" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ticket Info</label>
										<div class="col-4">
										<input name="ticket_info_1" class="form-control" type="text" placeholder="Ticket Info" value="" id="input"  required/>
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ad-Ons</label>
										<div class="col-4">
										<input name="ad_ons_1" class="form-control" type="text" placeholder="Ad-Ons" value="" id="input"  required/>
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Availability Date</label>
										<div class="col-4">
										<input name="availability_date_1" class="form-control" type="text" placeholder="Availability Date" value="" id="input" required />
										</div>
										</div>
										
										<label for="input" class="col-2 col-form-label">Ticket Package 2</label>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ticket Type</label>
										<div class="col-4">
										<input name="ticket_type_2" class="form-control" type="text" placeholder="Ticket Type" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Time Duration</label>
										<div class="col-4">
										<input name="time_duration_2" class="form-control" type="text" placeholder="Time Duration" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Price </label>
										<div class="col-4">
										<input name="price_2" class="form-control" type="text" placeholder="Price" value="" id="input"  required/>
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ticket Info</label>
										<div class="col-4">
										<input name="ticket_info_2" class="form-control" type="text" placeholder="Ticket Info" value="" id="input"  required/>
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Ad-Ons</label>
										<div class="col-4">
										<input name="ad_ons_2" class="form-control" type="text" placeholder="Ad-Ons" value="" id="input" required />
										</div>
										</div>
										<div class="form-group row">
										<label for="input" class="col-2 col-form-label">Availability Date</label>
										<div class="col-4">
										<input name="availability_date_2" class="form-control" type="text" placeholder="Availability Date" value="" id="input" required />
										</div>
										</div>
										
                                                </div>
                                            </div>
                                            <div class="kt-portlet__foot">
                                                <div class="kt-form__actions">
                                                    <button type="submit" class="btn btn-dark">Submit</button>
                                                    <!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
                                                </div>
                                            </div>
                                        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#add-more-image").click(function(){
                $(".image-items").append('<div class="form-group row"><label for="input" class="col-2 col-form-label"></label><div class="col-4"><input name="photos_of_experience[]" class="form-control" type="text" placeholder="Photos Of Experience" value="" id="input" required /></div></div>');
            });
        });
    </script>


    <script>
        $(document).ready(function(){
            $("#add-more-amenities").click(function(){
                $(".amenities-items").append('<div class="form-group row"><label for="input" class="col-2 col-form-label"></label><div class="col-4"><input name="ammenities[]" class="form-control" type="text" placeholder="Ammenities" value="" id="input" /></div></div>');
            });
        });
    </script>
    </body>
@endsection
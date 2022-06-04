@extends('layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Itenerary Details</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>
        
        <hr>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Itenerary Details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('itenerary-update', $itenerary->id) }}" class="kt-form" method="post" accept-charset="utf-8">
                                    
                    @csrf
                        <div class="kt-portlet__body">
        
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                            <div class="kt-section kt-section--first">
                                
        
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Experience Name</label>
                        <div class="col-6">
                            <input class="form-control" type="text" name="experience_name" value="{{ $itenerary->experience_name }}" placeholder="Experience Name" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">City</label>
                        <div class="col-6">
                            <select name="city" class="custom-select form-control"  required>
                                <option>Select</option>
                                @foreach($cities as $city)
                                <option @if($itenerary->city == $city->name) selected @endif value="{{ $city->name }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Subcity</label>
                        <div class="col-6">
                        <input type="text" name="sub_city" value="{{ $itenerary->sub_city }}" placeholder="Subcity" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Category</label>
                        <div class="col-6">
                            <select name="category" class="custom-select form-control" required>
                                <option>Select</option>
                                <option  @if($itenerary->category == 'Adventure') selected @endif value="Adventure">Adventure</option>
                                <option  @if($itenerary->category == 'Romantic') selected @endif value="Romantic">Romantic</option>
                                <option  @if($itenerary->category == 'Family Travel') selected @endif value="Family Travel">Family Travel</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Experience Slot</label>
                        <div class="col-6">
                            <select name="experience_slot" class="custom-select form-control" required>
                                <option>Select</option>
                                <option @if($itenerary->experience_slot == 'Evening') selected @endif value="Evening">Evening </option>
                                <option @if($itenerary->experience_slot == 'Morning') selected @endif value="Morning">Morning</option>
                                <option @if($itenerary->experience_slot == 'After-Noon') selected @endif value="After-Noon">After-Noon</option>
                                <option @if($itenerary->experience_slot == 'Morning - Afternoon') selected @endif value="Morning - Afternoon">Morning - Afternoon</option>
                                <option @if($itenerary->experience_slot == 'Morning - Afternoon') selected @endif value="Afternoon - Evening">Morning - Afternoon</option>
                                <option @if($itenerary->experience_slot == 'Morning - Evening ') selected @endif value="Morning - Evening">Morning - Evening </option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Experience Duration</label>
                        <div class="col-6">
                            <select name="experience_duration" class="custom-select form-control" required>
                                <option>Select</option>
                                <option  @if($itenerary->experience_duration == 'Half Day') selected @endif value="Half Day">Half Day</option>
                                <option  @if($itenerary->experience_duration == 'Quarter Day') selected @endif value="Quarter Day">Quarter Day</option>
                                <option  @if($itenerary->experience_duration == 'Full Day') selected @endif value="Full Day">Full Day</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Transfers</label>
                        <div class="col-6">
                            <select name="transfers" class="custom-select form-control" required>
                                <option>Select</option>
                                <option @if($itenerary->transfers == 'Included') selected @endif value="Included">Included </option>
                                <option @if($itenerary->transfers == 'Not Included') selected @endif value="Not Included">Not Included</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Group Type</label>
                        <div class="col-6">
                            <select name="group_type" class="custom-select form-control" required>
                                <option>Select</option>
                                <option @if($itenerary->group_type == 'Shared') selected @endif value="Shared">Shared </option>
                                <option @if($itenerary->group_type == 'Semi-Private') selected @endif value="Semi-Private">Semi-Private</option>
                                <option @if($itenerary->group_type == 'Private') selected @endif value="Private">Private </option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Confirmation Type</label>
                        <div class="col-6">
                            <select name="confirmation_type" class="custom-select form-control" required>
                                <option>Select</option>
                                <option @if($itenerary->confirmation_type == 'Late-Confirmation') selected @endif value="Late-Confirmation">Late-Confirmation</option>
                                <option @if($itenerary->confirmation_type == 'Instant') selected @endif value="Instant">Instant</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ammenities</label>
                        <table>
                            <tr>
                                <td>
                                @foreach(json_decode($itenerary->ammenities) as $ammenities)	
                                    <div class="form-group row">
                                    <label for="input" class="col-4 col col-form-label"></label>
                                        <div class="col">
                                            <input name="ammenities[]" style="width: 500px !important;" class="form-control" type="" value="{{ explode(',', $ammenities)[0] }}" id="input" />
                                        </div>
                                    </div>
                                @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="amenities-items"></div>
                    <div class="text-center mb-2">
                        <button id="add-more-amenities" class="btn btn-primary" type="button">Add More Amenities</button>
                    </div>
                    
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Photos Of Experience</label>
                        <table>
                            <tr>
                                <td>
                                @foreach(json_decode($itenerary->photos_of_experience) as $photo_of_experience)	
                                    <div class="form-group row">
                                    <label for="input" class="col-4 col col-form-label"></label>
                                        <div class="col">
                                            <input name="photos_of_experience[]" style="width: 500px !important;" class="form-control" type="" value="{{ explode(',', $photo_of_experience)[0] }}" id="input" />
                                        </div>
                                    </div>
                                @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
        
                    <div class="image-items"></div>
                    <div class="text-center mb-2">
                        <button class="btn btn-primary" id="add-more-image" type="button">Add More Photos</button>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Experience Video</label>
                        <div class="col-6">
                            <input name="experience_video" class="form-control" type="text" value="{{ $itenerary->experience_video }}"  placeholder="Experience Video" id="input" required />
                        </div>
                    </div>
                                
                                <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Experience Address </label>
                        <div class="col-6">
                            <input name="experience_address" class="form-control" type="text" placeholder="Experience Address"  value="{{ $itenerary->experience_address }}"  id="input"  required/>
                        </div>
                    </div>
        
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Timmings</label>
                        <div class="col-6">
                            <input name="timmings" class="form-control" type="text" placeholder="Timmings" value="{{ $itenerary->timmings }}" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">What to Expect (Description)</label>
                        <div class="col-6">
                            <input name="what_to_expect" class="form-control" type="text" value="{{ $itenerary->what_to_expect }}" placeholder="What to Expect (Description)" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">About Experience</label>
                        <div class="col-6">
                            <input name="about_experience" class="form-control" value="{{ $itenerary->about_experience }}" type="text" placeholder="About Experience" id="input" required />
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">What To Bring</label>
                        <div class="col-6">
                            <input name="what_to_bring" class="form-control" type="text" value="{{ $itenerary->what_to_bring }}" placeholder="What To Bring" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Booking Confirmation</label>
                        <div class="col-6">
                            <input name="booking_confirmation" class="form-control" value="{{ $itenerary->booking_confirmation }}" type="text" placeholder="Booking Confirmation" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Meetup Information</label>
                        <div class="col-6">
                            <input name="meetup_information" class="form-control" value="{{ $itenerary->meetup_information }}" type="text" placeholder="Meetup Information" id="input" required />
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Terms & Conditions</label>
                        <div class="col-6">
                            <input name="terms_and_condition" class="form-control" value="{{ $itenerary->terms_and_condition }}" type="text" placeholder="Terms & Conditions" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Package Exclusions</label>
                        <div class="col-6">
                            <input name="package_exclusion" class="form-control" value="{{ $itenerary->package_exclusion }}" type="text" placeholder="Package Exclusions" id="input"  required/>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Cancellation Policy</label>
                        <div class="col-6">
                            <input name="cancellation_policy" class="form-control" value="{{ $itenerary->cancellation_policy }}" type="text" placeholder="Cancellation Policy" id="input"  required/>
                        </div>
                    </div>
                    
                    <label for="input" class="col-2 col-form-label">Tour Itinerary</label>
                    @php $i=1 @endphp
                    @foreach(json_decode($itenerary->tour_itenarary) as $ti)
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Day {{ $i++ }}</label>
                        <div class="col-4">
                            <input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 1" value="{{ $ti }}" id="input" required />
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="form-group row">
                        <label for="input" class="col-2 col-form-label">Day 2</label>
                        <div class="col-4">
                            <input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 2"  value="{{ $itenerary->tour_itenarary }}" id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Day 3</label>
                        <div class="col-4">
                            <input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 3" value="{{ $itenerary->tour_itenarary }}" id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Day 4</label>
                        <div class="col-4">
                            <input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 4" value="{{ $itenerary->tour_itenarary }}" id="input" />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Day 5</label>
                        <div class="col-4">
                            <input name="tour_itenarary[]" class="form-control" type="text" placeholder="Tour Itinerary Day 5"  value="{{ $itenerary->tour_itenarary }}"id="input" />
                        </div>
                    </div> -->
                    
                    <label for="input" class="col-2 col-form-label">Ticket Package 1</label>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ticket Type</label>
                        <div class="col-4">
                            <input name="ticket_type_1" class="form-control" type="text" value="{{ $itenerary->ticket_type_1 }}" placeholder="Ticket Type" id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Time Duration</label>
                        <div class="col-4">
                            <input name="time_duration_1" class="form-control" type="text" value="{{ $itenerary->time_duration_1 }}" placeholder="Time Duration" id="input"  required/>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Price </label>
                        <div class="col-4">
                            <input name="price_1" class="form-control" type="text" placeholder="Price" value="{{ $itenerary->price_1 }}" id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ticket Info</label>
                        <div class="col-4">
                            <input name="ticket_info_1" class="form-control" type="text" placeholder="Ticket Info" value="{{ $itenerary->ticket_info_1 }}" id="input"  required/>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ad-Ons</label>
                        <div class="col-4">
                            <input name="ad_ons_1" class="form-control" type="text" placeholder="Ad-Ons" id="input" value="{{ $itenerary->ad_ons_1 }}"  required/>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Availability Date</label>
                        <div class="col-4">
                            <input name="availability_date_1" class="form-control" type="text" placeholder="Availability Date"  value="{{ $itenerary->availability_date_1 }}" id="input" required />
                        </div>
                    </div>
                    
                    <label for="input" class="col-2 col-form-label">Ticket Package 2</label>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ticket Type</label>
                        <div class="col-4">
                            <input name="ticket_type_2" class="form-control" type="text" placeholder="Ticket Type" value="{{ $itenerary->ticket_type_2 }}"  id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Time Duration</label>
                        <div class="col-4">
                            <input name="time_duration_2" class="form-control" type="text" placeholder="Time Duration" value="{{ $itenerary->time_duration_2 }}" id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Price </label>
                        <div class="col-4">
                            <input name="price_2" class="form-control" type="text" placeholder="Price" id="input" value="{{ $itenerary->price_2 }}"   required/>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ticket Info</label>
                        <div class="col-4">
                            <input name="ticket_info_2" class="form-control" type="text" placeholder="Ticket Info" value="{{ $itenerary->ticket_info_2 }}" id="input"  required/>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Ad-Ons</label>
                        <div class="col-4">
                            <input name="ad_ons_2" class="form-control" type="text" value="{{ $itenerary->ad_ons_2 }}" placeholder="Ad-Ons" id="input" required />
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-2 col-form-label">Availability Date</label>
                        <div class="col-4">
                            <input name="availability_date_2" class="form-control" type="text" value="{{ $itenerary->availability_date_2 }}" placeholder="Availability Date" id="input" required />
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
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#add-more-image").click(function(){
                $(".image-items").append('<div class="form-group row"><label for="input" class="col-2 col-form-label"></label><div class="col-4"><input name="photos_of_experience[]" class="form-control" type="text" placeholder="Photos Of Experience" id="input" required /></div></div>');
            });
        });
    </script>


<script>
$(document).ready(function(){
    $("#add-more-amenities").click(function(){
        $(".amenities-items").append('<div class="form-group row"><label for="input" class="col-2 col-form-label"></label><div class="col-4"><input name="ammenities[]" class="form-control" type="text" placeholder="Ammenities" id="input" /></div></div>');
    });
});
</script>
@endsection

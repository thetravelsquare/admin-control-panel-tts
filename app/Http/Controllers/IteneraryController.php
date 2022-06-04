<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itenerary;
use App\Models\City;

class IteneraryController extends Controller
{
    public function index(){
        $iteneraries = Itenerary::all();
        return view('iteneraries', compact('iteneraries'));
    }

    public function iteneraryDetails($id){
        $itenerary = Itenerary::findOrFail($id);
        $cities = City::all();
        return view('itenerary-details', compact('itenerary', 'cities'));
    }

    public function update(Request $request, $id){
        $input = $request->all();
        // dd($input);
        $itenerary = Itenerary::findOrFail($id);
        $itenerary->experience_name = $input['experience_name'];
        $itenerary->city = $input['city'];
        $itenerary->sub_city = $input['sub_city'];
        $itenerary->category = $input['category'];
        $itenerary->experience_slot = $input['experience_slot'];
        $itenerary->experience_duration = $input['experience_duration'];
        $itenerary->transfers = $input['transfers'];
        $itenerary->group_type = $input['group_type'];
        $itenerary->confirmation_type = $input['confirmation_type'];
        $itenerary->ammenities = json_encode($input['ammenities']);
        $itenerary->photos_of_experience = json_encode($input['photos_of_experience']);
        $itenerary->experience_video = $input['experience_video'];
        $itenerary->experience_address = $input['experience_address'];
        $itenerary->timmings = $input['timmings'];
        $itenerary->what_to_expect = $input['what_to_expect'];
        $itenerary->about_experience = $input['about_experience'];
        $itenerary->what_to_bring = $input['what_to_bring'];
        $itenerary->booking_confirmation = $input['booking_confirmation'];
        $itenerary->meetup_information = $input['meetup_information'];
        $itenerary->terms_and_condition = $input['terms_and_condition'];
        $itenerary->package_exclusion = $input['package_exclusion'];
        $itenerary->cancellation_policy = $input['cancellation_policy'];
        $itenerary->tour_itenarary = json_encode($input['tour_itenarary']);
        $itenerary->ticket_type_1 = $input['ticket_type_1'];
        $itenerary->time_duration_1 = $input['time_duration_1'];
        $itenerary->price_1 = $input['price_1'];
        $itenerary->ticket_info_1 = $input['ticket_info_1'];
        $itenerary->ad_ons_1 = $input['ad_ons_1'];
        $itenerary->availability_date_1 = $input['availability_date_1'];
        $itenerary->ticket_type_2 = $input['ticket_type_2'];
        $itenerary->time_duration_2 = $input['time_duration_2'];
        $itenerary->price_2 = $input['price_2'];
        $itenerary->ticket_info_2 = $input['ticket_info_2'];
        $itenerary->ad_ons_2 = $input['ad_ons_2'];
        $itenerary->availability_date_2 = $input['availability_date_2'];
        if($itenerary->save()){
            return back()->with('success', 'Itenerary Updated Successfully');
        }
    }
}

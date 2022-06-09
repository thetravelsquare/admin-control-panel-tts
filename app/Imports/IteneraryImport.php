<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Itenerary;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  

class IteneraryImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        $itenerary = new Itenerary ();
        $itenerary->experience_name = $row['experience_name'];
        $itenerary->city = $row['city'];
        $itenerary->sub_city = $row['sub_city'];
        $itenerary->category = $row['category'];
        $itenerary->experience_slot = $row['experience_slot'];
        $itenerary->experience_duration = $row['experience_duration'];
        $itenerary->transfers = $row['transfers'];
        $itenerary->group_type = $row['group_type'];
        $itenerary->confirmation_type = $row['confirmation_type'];
        $itenerary->ammenities = json_encode(explode(',', $row['ammenities']));
        $itenerary->photos_of_experience = json_encode(explode(',', $row['photos_of_experience']));
        $itenerary->experience_video = $row['experience_video'];
        $itenerary->experience_address = $row['experience_address'];
        $itenerary->timmings = $row['timmings'];
        $itenerary->what_to_expect = $row['what_to_expect'];
        $itenerary->about_experience = $row['about_experience'];
        $itenerary->what_to_bring = $row['what_to_bring'];
        $itenerary->booking_confirmation = $row['booking_confirmation'];
        $itenerary->meetup_information = $row['meetup_information'];
        $itenerary->terms_and_condition = $row['terms_and_condition'];
        $itenerary->package_exclusion = $row['package_exclusion'];
        $itenerary->cancellation_policy = $row['cancellation_policy'];
        $itenerary->tour_itenarary = $row['tour_itenarary'];
        $itenerary->ticket_type_1 = $row['ticket_type_1'];
        $itenerary->time_duration_1 = $row['time_duration_1'];
        $itenerary->price_1 = $row['price_1'];
        $itenerary->ticket_info_1 = $row['ticket_info_1'];
        $itenerary->ad_ons_1 = $row['ad_ons_1'];
        $itenerary->availability_date_1 = $row['availability_date_1'];
        $itenerary->ticket_type_2 = $row['ticket_type_2'];
        $itenerary->time_duration_2 = $row['time_duration_2'];
        $itenerary->price_2 = $row['price_2'];
        $itenerary->ticket_info_2 = $row['ticket_info_2'];
        $itenerary->ad_ons_2 = $row['ad_ons_2'];
        $itenerary->availability_date_2 = $row['availability_date_2'];
       $itenerary->save();
    }
}


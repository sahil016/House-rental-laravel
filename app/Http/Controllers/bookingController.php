<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_booking;
use Illuminate\Support\Facades\DB;  


class bookingController extends Controller
{
    public function user_booking(Request $REQ)
    {
        $user_booking=new user_booking;
        $user_booking->U_full_name=$REQ['U_full_name'];
        $user_booking->House_no=$REQ['House_no'];
        $user_booking->House_booking_id=$REQ['House_booking_id'];
        $user_booking->U_id=$REQ['U_id'];
        $user_booking->U_address=$REQ['U_address'];
        $user_booking->U_city=$REQ['U_city'];
        $user_booking->U_state=$REQ['U_state'];
        $user_booking->House_agreement_document=$REQ['House_agreement_document'];
        $user_booking->Booking_date=$REQ['Booking_date'];
        $user_booking->U_gender=$REQ['U_gender'];
        $user_booking->U_id_Proof=$REQ['U_id_Proof'];
        $user_booking->House_Exit_date=$REQ['House_Exit_date'];
        // $user_booking->U_email=$REQ['U_email'];
        
    $user_booking->save();

        return redirect('/payment');
    }

    function show()
    {
        $data= DB::table('user_booking')->get();
        return view('booklist',['data'=>$data]);
    }
}

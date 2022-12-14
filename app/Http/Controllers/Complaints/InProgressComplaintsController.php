<?php

namespace App\Http\Controllers\Complaints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class InProgressComplaintsController extends Controller
{
    public function index()
    {
        //show complaints where authority status is pending

        
        $inprgs = DB::table('complaintsdetail')
                        ->join('userss', 'userss.uid', '=', 'complaintsdetail.uid')
                        ->join('wards', 'wards.wid', '=', 'complaintsdetail.wid')
                        ->where('astatus', '=','Ongoing')
                        -> get();
                        
        
        return view('complaints/inProgressComplaints',['inprgs'=>$inprgs]);
    }
}

 
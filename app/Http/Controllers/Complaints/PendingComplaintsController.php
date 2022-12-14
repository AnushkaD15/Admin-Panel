<?php

namespace App\Http\Controllers\Complaints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PendingComplaintsController extends Controller
{
    public function index2()
    {
        $pcmp = DB::table('complaintsdetail')
                        ->join('userss', 'userss.uid', '=', 'complaintsdetail.uid')
                        ->join('wards', 'wards.wid', '=', 'complaintsdetail.wid')
                        ->where('astatus', '=', 'Ongoing')
                        ->where('uack', '=', 'pending')
                        ->get();
                        
        
        return view('complaints/pendingComplaints',['pcmp'=>$pcmp]);
    }
}

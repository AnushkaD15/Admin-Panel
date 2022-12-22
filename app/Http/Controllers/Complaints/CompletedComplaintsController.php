<?php

namespace App\Http\Controllers\Complaints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CompletedComplaintsController extends Controller
{
    public function index()
    {
        //show complaints where authority status is completed
        $cmp = DB::table('complaintsdetail')
                        ->where('astatus', '=','Complete')
                        ->get();
                        
        
        return view('complaints/completedComplaints',['cmp'=>$cmp]);
    }
}

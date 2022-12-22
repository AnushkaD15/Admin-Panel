<?php

namespace App\Http\Controllers\Complaints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;


class NewComplaintsController extends Controller
{
    public function index()
    {
        $date = Carbon::today()->format('Y-m-d');

        $dcmp = DB::table('complaintsdetail')
                        ->whereDate('registereddate', '=', $date)
                        ->where("astatus", "=", "Registered")
                        ->get();
                       
        
        return view('complaints/newComplaints',['dcmp'=>$dcmp]);
    }

}

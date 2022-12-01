<?php

namespace App\Http\Controllers\Complaints;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class NewComplaintsController extends Controller
{
    public function index()
    {
        $date = date('d-m-Y');
       

        $dcmp = DB::table('complaintsdetail')
                        ->where('registereddate', '=', $date)
                        ->get();
                       
        
        return view('complaints/newComplaints',['dcmp'=>$dcmp]);
    }

}

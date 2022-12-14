<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ComplaintDetails;
use App\Models\AuthorityComplaint;
use Illuminate\Support\Facades\View;

class ComplaintDetailsController extends Controller
{
    public function addComplaintDetails(Request $req)
    {
        $complaintsDetails = new ComplaintDetails ;
        $complaintsDetails-> cdid= $req ->cdid;
        $complaintsDetails-> uid= $req ->uid;        
        $complaintsDetails-> cid= $req ->cid;
        $complaintsDetails-> wid = $req ->wid;
        $complaintsDetails-> details= $req ->details;
        $complaintsDetails-> registereddate= $req ->registereddate;
        $complaintsDetails-> tobeCompleted= $req ->tobeCompleted;
        $complaintsDetails-> astatus= $req ->astatus;
        $complaintsDetails-> aDateofUpdate= $req ->aDateofUpdate;
        $complaintsDetails-> uack= $req ->uack;
        $complaintsDetails-> ackDate= $req ->ackDate;
        $result = $complaintsDetails->save();

        if($result)
        {
            return ["result"=>'Data has been saved.'];
        }
        else
        {
            return ["result"=>'Operation failed.'];
        }
    }

    //get complaints details by aid 
    public function getComplaintDetailsByAID(Request $req){
        $complaintsDetails = DB::table('complaintsdetail')
        ->join ('authoritycomplaint', 'authoritycomplaint.cid', '=', 'complaintdetails.cid')        
        ->where('aid', $req->aid)->get();
        return $complaintsDetails;
    }
    
    public function ComplaintRecords()
    {
        $complaintsDetails = DB::table('complaintsdetail')->get();
        return view('complaintRecords',['complaintsDetails'=>$complaintsDetails]);
    }
    
}

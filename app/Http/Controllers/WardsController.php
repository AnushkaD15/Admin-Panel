<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wards;

class WardsController extends Controller
{
    //
    function addWard(Request $req)
    {
        $wards = new Wards;
        $wards-> wid = $req ->wid;
        $wards-> ward = $req ->ward;
        $result = $wards->save();

        if($result)
        {
            return ["result"=>'Data has been saved.'];
        }
        else
        {
            return ["result"=>'Operation failed'];
        }
    }

    public function getWardData(){
        
        return response()->json(Wards::all(), 200);
    }

    public function getSpecifiedWardDetailsByWID(){
        $wards = DB::table('wards')->where('uid', $req->wid);
        return $wards;
    }

  

}

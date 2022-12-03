<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wards;
use Illuminate\Support\Facades\View;

class WardsController extends Controller
{
    //add data in database 
    public function addWard(Request $request){
        $request ->validate(
            [
                'ward'=>'required',
                'description'=>'required'
            ]
        );
        $wards = new Wards;
        $wards->ward = $request->input('ward');
        $wards->description = $request->input('description'); 
        $wards->save();

        return redirect()->route('wards.index')->with('success', 'Ward  Added successfully.');
    
    }

    //
    // function addWard(Request $req)
    // {
    //     $wards = new Wards;
    //     $wid = $req ->input('ward');
    //     $ward = $req ->input('description');
    //     // $result = $wards->save();
    //     $isInsertSuccess = Wards::insert(['ward'=>$wid ,
    //                                     'description'=>$ward
    //                                 ]);

    //     if($isInsertSuccess) 
    //     {
    //         return("Data Saved.");
    //     }
    //     else
    //     {
    //         return "Operation Failed.";
    //     }
    // }

    public function getWardData(){
        
        return response()->json(Wards::all(), 200);
    }

    public function getSpecifiedWardDetailsByWID(){
        $wards = DB::table('wards')->where('uid', $req->wid);
        return $wards;
    }

    public function index()
    {
        return view('admin.addWards');
    }

}

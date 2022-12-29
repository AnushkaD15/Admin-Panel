<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Wards;
use Illuminate\Support\Facades\View;


class WardsController extends Controller
{
    //add data in database 
    // public function addWard(Request $request){
    //     $request ->validate(
    //         [
    //             'ward'=>'required',
    //             'description'=>'required'
    //         ]
    //     );
    //     $wards = new Wards;
    //     $wards->ward = $request->input('ward');
    //     $wards->description = $request->input('description'); 
    //     $data=array('ward'=>$ward,"description"=>$description);
    //     DB::table('wards')->insert($data);    

    //     return redirect()->route('wards.index')->with('success', 'Ward  Added successfully.');
    
    // }

    
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
    //         echo 'Data saved.';
    //     }
    //     else
    //     {
    //         echo 'Operation Failed.';
    //     }
    // }

    public function  addWard(Request $request)
    {
        
        $this->validate($request, [
                'ward' => 'required',
                'wardaddress' => 'required'
        ]);
        // $ward =  new Wards([
        //     'wid' => $request->get('required'),
        //     'ward' => $request->get('required')
        // ]);

        $wards = new Wards();
        $wards->ward = $request['ward'];
        $wards->wardaddress  = $request['wardaddress'];
        $wards->save();
       return redirect()->route('wards.index')->with('success', 'Ward  Added Successfully.');

    } 

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

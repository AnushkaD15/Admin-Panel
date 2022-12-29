<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authority;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AuthorityController extends Controller
{
    public function addAuthority(Request $request)
    {

        $this->validate($request, [
            'aname'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'addharno'=>'required',
            'designation'=>'required',
            'workfrom'=>'required',
            'workstill'=>'required',
            'password'=>'required',
            'alevel'=>'required'
        ]);

        $authority = new Authority;
        $authority-> aname= $req ->aname;        
        $authority-> phone= $req ->phone;
        $authority-> address = $req ->address;
        $authority-> addharno= $req ->addharno;
        $authority-> designation= $req ->designation;
        $authority-> workfrom= $req ->workfrom;
        $authority-> workstill= $req ->workstill;
        $authority-> password = $req ->password;
        $authority-> alevel= $req ->alevel;
        $authority->save();

        return redirect()->route('/authority.index')->with('success', 'Authority Added Successfully.');
    }

    //get data from authority by id
    public function getAuthority($id)
    {
        return Authority::find($id);
    }

    public function getAuthorityData(){
        return response()->json(Authority::all(), 200);
    }

    public function authorityRecords()
    {
        $authority = DB::table('authority')->get();
        return view('authorityRecords',['authority'=>$authority]);
    }

    public function index()
    {
        return view('admin.addAuthority');
    }
    
}


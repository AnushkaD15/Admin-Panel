<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authority;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class AuthorityController extends Controller
{
    public function addAuthority(Request $req)
    {
        $authority = new Authority ;
        $authority-> aid= $req ->aid;
        $authority-> aname= $req ->aname;        
        $authority-> phone= $req ->phone;
        $authority-> address = $req ->address;
        $authority-> addharno= $req ->addharno;
        $authority-> designation= $req ->designation;
        $authority-> workfrom= $req ->workfrom;
        $authority-> workstill= $req ->workstill;
        $authority-> password = $req ->password;
        $authority-> alevel= $req ->alevel;
        $result = $authority->save();

        if($result)
        {
            return ["result"=>'Data has been saved.'];
        }
        else
        {
            return ["result"=>'Operation failed.'];
        }
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


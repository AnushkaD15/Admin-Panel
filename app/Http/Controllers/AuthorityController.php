<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Authority;

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
    
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class UsersController extends Controller
{
    public function addUser(Request $req)
    {
        $users = new Users;
        $users-> uid = $req ->uid;
        $users-> uname= $req ->uname;        
        $users-> phone= $req ->phone;
        $users-> address= $req ->address;
        $users-> addharno= $req ->addharno;
        $users-> wid= $req ->wid;
        $users-> password= $req ->password;
        $result = $users->save();

        if($result)
        {
            return ["result"=>'Data has been saved.'];
        }
        else
        {
            return ["result"=>'Operation failed.'];
        }
    }

    //DB::table('users')->increment('votes');


    public function getUserData(){
        return response()->json(Users::all(), 200);
    }

    public function getSpecificUserByUserID(){
        $users = DB::table('users')->where('uid', 1)->first();
        return $users;
    }

    public function updateUser(){
        $users = DB::update('update student set name = ?, phone = ?, address=?,  where id = ?',["uname","uid"]);
    }
}

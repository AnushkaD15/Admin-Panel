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

    public function updateUser($uid, Request $req){
        $users = DB::table('users')->where('uid', $req->uid)->update(['uname' => $req->uname,'phone' =>$req->phone, 'address' => $req ->address, 'addharno' => $req ->addharno,'wid' => $req ->wid]);
        if($users)
        {
            return ["result"=>'Data has been saved.'];
        }
        else
        {
            return ["result"=>'Operation failed.'];
        }
    }

    // write a function to increment uid
    // public function incrementUID(){
    //     $users = DB::table('users')->increment('uid');
    //     return $users;
    // }

}

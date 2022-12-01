<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class VillageResidentsController extends Controller
{
    public function villageIndex(){
        return view('villageResidents');
       // return "hiii";
    }

    public function index()
    {
        # code...
        //show all users from table
        $users = DB::table('userss')->get();
        return view('villageResidents', ['users' => $users]);   
    }

}

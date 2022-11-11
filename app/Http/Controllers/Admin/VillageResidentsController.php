<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VillageResidentsController extends Controller
{
    public function villageIndex(){
        return view('admin.villageResidents');
       // return "hiii";
    }

}

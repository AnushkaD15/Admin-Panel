<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trialAPI extends Controller
{
    function getData()
    {
        return ["name"=>'Anushka', "city"=> 'Bhandara', "Age"=> 21];
    }
}

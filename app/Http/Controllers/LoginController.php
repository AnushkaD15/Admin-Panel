<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Authority;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
}

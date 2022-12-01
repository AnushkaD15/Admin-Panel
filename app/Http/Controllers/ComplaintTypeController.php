<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComplaintType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ComplaintTypeController extends Controller
{
    public function index()
    {
        return view('admin.addComplaintType');
    }
}

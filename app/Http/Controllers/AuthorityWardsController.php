<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Authority;
use App\Models\Wards;
use App\Models\AuthorityWards;
use Illuminate\Support\Facades\View;

class AuthorityWardsController extends Controller
{
    public function index()
    {
        $wdata = Wards::all();
        $adata = Authority::all();

        return view('admin.assignWardsToAuthority', ['wdata' => $wdata, 'adata' => $adata]);
        
    }

    public function store(){
        $data = request()->validate([
            'aid' => 'required',
            'wid' => 'required',
        ]);

        AuthorityWards::create($data);

        return redirect('/assignWardsToAuthority')->with('message','Ward Assigned to Authority Successfully!');
    }

}

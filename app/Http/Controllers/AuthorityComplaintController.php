<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AuthorityComplait;
use App\Models\AuthorityWard;
use App\Models\Authority;

class AuthorityComplaintController extends Controller
{
    //get authority for given cid and wid
    public function getAuthorityByCIDAndWID(Request $req){
        $authoritycomplaint = DB::table('authoritycomplaint')
        -> join ('authoritywards', 'authoritywards.aid', '=', 'authoritycomplaint.aid')        
        -> join ('authority', 'authority.aid', '=', 'authoritycomplaint.aid')
        ->where('cid', $req->cid)->where('wid', $req->wid)->first();
        return $authoritycomplaint;
    }
}

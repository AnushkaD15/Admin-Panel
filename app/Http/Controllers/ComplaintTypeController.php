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

    public function addComplaintType(Request $request)
    {
        $this->validate($request, [
            'ctype' => 'required',
            'daystocomplete' => 'required'
        ]);

        $complainttype = new ComplaintType;
        $complainttype->ctype = $request->get('ctype');
        $complainttype->daystocomplete = $request->get('daystocomplete');
        $complainttype->save();

        return redirect()->route('complainttype.index')->with('success', 'Complaint Type Added Successfully.');
    }

}


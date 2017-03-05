<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Assignment;

class AssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getIndex()
    {
    	$assignments = Assignment::all()->sortByDesc('id');
    	return view('admin.assignments.index');//->withAssignments($assignments)->with('ordercreated', $ordercreated);
    }

    public function getAssignmentsByDate($date)
    {
    	// $assignments = Assignment::where('created_at', )
    }

    


}

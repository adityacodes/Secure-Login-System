<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Assignment, App\Status;

class AssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function getIndex()
    {
    	$assignments = Assignment::orderBy('id', 'desc')->paginate(5);
        foreach($assignments as &$assignment)
        {
            $assignment->as_status=$this->getStatusById($assignment->as_status);
        }

        $ordercreated = 0;
    	return view('admin.assignments.index')
                ->withAssignments($assignments)
                ->with('ordercreated', $ordercreated);
    }

    public function getStatusById($id)
    {
        $status = Status::where('id', $id)->first();
        return $status->st_name;
    }

    public function getAssignmentsByDate($date)
    {
    	// $assignments = Assignment::where('created_at', )
    }

    


}

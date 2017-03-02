<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Assignment, App\Status;
use Auth, Session;

class AssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function statusmessage($statusid)
    {
        $sm = Status::where('id', $statusid)->first();
        return $sm->st_name;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = Assignment::orderBy('id', 'desc')->paginate(10);
        foreach($assignments as &$assignment)
        {
            $assignment->as_status = $this->statusmessage($assignment->as_status);
        }
        return view('users.assignment.index')->withAssignments($assignments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.assignment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, array(
                'amount' => 'required',
                'message' => 'required'
            ));

       $assignment = new Assignment;
       $assignment->as_id = strtotime('now');
       $assignment->as_status = 1;
       $assignment->as_amount = $request->amount;
       $assignment->user_id = Auth::user()->id;
       $assignment->as_message = $request->message;
       $assignment->setting_selected = 1;
       $assignment->as_cancel_reason = ' ';
       $assignment->save();


       echo '{"Success":true, "Message":"Assignment saved successfully."}';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);
        return view('users.assignment.show')->withAssignment($assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::find($id);
        $assignment->delete();
        Session::flash('Success', 'Assignment Deleted Successfully');
        return redirect()->route('dashboard');
    }


    public function cancel(Request $request, $id)
    {
        $assignment = Assignment::where('as_id','=', $id)->first();
        $assignment->as_status = 5;
        $assignment->as_cancel_reason = $request->cancelreason;
        $assignment->save();
        // Session::flash('Success', 'Assignment Deleted Successfully');
        echo '{"Success":true, "Message":"Assignment saved successfully."}';
    }

    
}

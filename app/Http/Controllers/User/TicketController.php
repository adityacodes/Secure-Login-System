<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ticket, Auth;

class TicketController extends Controller
{
	private $uploadPath = 'uploads/tickets';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saveTicket(Request $request)
    {
    	$ticket = new Ticket;

    	$ticket->topic = $request->topic;
    	$ticket->message = $request->message;

    	// if ($request->file('file')->isValid()) {
     //        $imageName = time().'.'.$request->file('file')->getClientOriginalExtension();
     //        $request->file('file')->move($this->uploadPath, $imageName);
            
     //    }
     //    else {
     //      	$result = array('Success'=>false, 'Message'=>'Image upload failed. Invalid image.');
     //      	echo json_encode($result);
     // 		abort(405);
     //    }

    	$ticket->file = '$imageName';
    	$ticket->status = 'aasasa';
    	$ticket->user_id = Auth::user()->id;
    	$ticket->save();

        $result = array('Success'=>true, 'Message'=>'Ticket saved successfully.');
        echo json_encode($result);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User, App\Assignment, App\Order;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display the admin page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['totalusers'] = User::count();
        $data['totalassignments'] = Assignment::count();
        $data['totalorders'] = Order::count();
        return view('admin.index')->with('data', $data);
    }
    
    public function getParticipants()
    {
        return view('admin.participants');
    }

    
}

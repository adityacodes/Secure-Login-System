<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
        return view('admin.index');
    }
    public function getAssignments()
    {
        return view('admin.assignments');
    }
    public function getOrders()
    {
        return view('admin.orders');
    }
    public function getParticipants()
    {
        return view('admin.participants');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Ticket;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function index()
    {
        $tickets = Ticket::orderBy('id', 'desc')->paginate(5);
        return view('admin.support')->withTickets($tickets);
    }
}

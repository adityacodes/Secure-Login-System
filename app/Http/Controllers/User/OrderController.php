<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getOrdersByUserId()
    {
    	// $orders using Auth::user()->id;
    	return view('users.main.orders');
    }
}

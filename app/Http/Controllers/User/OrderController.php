<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Order, Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return mixed
     */
    public function getOrdersByUserId()
    {
    	// $orders using Auth::user()->id;

        $orders = Order::where('or_to', '=' ,Auth::user()->id)->paginate(10);

        return view('users.main.orders')->withOrders($orders);
    }
}

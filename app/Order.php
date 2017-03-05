<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Order extends Model
{
    public static function index()
    {
        Order::where('or_to', Auth::user()->id);
        Order::where('or_for', Auth::user()->id);
        Order::where('or_for', Auth::user()->id)->paginate(10);
    }
}

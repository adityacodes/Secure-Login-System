<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reference;
use Auth, Session;
use App\Order, App\Assignment;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @Get("dashboard", as="dashboard")
     */
    public function getDashboard()
    {
        $references = Reference::where('ref_id', Auth::user()->re_id)->pluck('user_id');
        $orderscount = Order::where('or_for', Auth::user()->id)->count();
        $assignmentscount = Assignment::where('user_id', Auth::user()->id)->count();

        $pgorders = $total = $orderscount + (10 - ($orderscount)%10);
        $pgassignments = $total = $assignmentscount + (10 - ($assignmentscount)%10);
    	return view('users.main.dashboard')->with('totalorders', $pgorders)
                                           ->with('totalassignments', $pgassignments);
    }

    /**
     * @Get("participants")
     */
    public function getParticipants()
    {
    	return view('users.main.participants');
    }

    /**
     * @Get("mavro")
     */
    public function getMavro()
    {
        return view('users.main.mavro');
    }

    /**
     * @Get("referals")
     */
    public function getReferals()
    {
    	return view('users.main.referals');
    }

    /**
     * @Get("profile")
     */
    public function getProfile()
    {
        
    	return view('users.main.profile');
    }

    /**
     * @Get("letter-of-happiness")
     */
    public function getHappiness()
    {
    	return view('users.main.happiness');
    }

    /**
     * @Get("accounts")
     */
    public function getAccounts()
    {
        return view('users.account.index');
    }


    /**
     * @Get("provide-help")
     */
    public function getProvideHelp()
    {
        return view('users.main.providehelp');
    }

    /**
     * @Get("get-help")
     */ 
    public function getGetHelp()
    {
        return view('users.main.gethelp');
    }

    /**
     * @Get("notices")
     */ 
    public function getNotices()
    {
        return view('users.main.notices');
    }

    /**
     * @Get("news")
     */  
    public function getNews()
    {
        return view('users.main.news');
    }

    /**
     * @Get("faq")
     */ 
    public function getFaq()
    {
        return view('users.main.faq');
    }


    /**
     * @Get("support")
     */
    public function getSupport()
    {
        return view('users.main.support');
    }

    /**
     * @Get("messages")
     */
    public function getMessages()
    {
        return view('users.main.messages');
    }


}

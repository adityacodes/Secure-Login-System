<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display the user page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    public function getDashboard()
    {
    	return view('users.dashboard');
    }

    public function getTrustee()
    {
    	return view('users.trustee');
    }

    public function getReferals()
    {
    	return view('users.referals');
    }

    public function getProfile()
    {
    	return view('users.profile');
    }

    public function getHappiness()
    {
    	return view('users.happiness');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Reference;
use Auth, Session;

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
        return view('users.main.index');
    }

    // Route : dashboard
    public function getDashboard()
    {
        $references = Reference::where('ref_id', Auth::user()->re_id)->pluck('user_id');

    	return view('users.main.dashboard');
    }

    // Route : participants
    public function getParticipants()
    {
    	return view('users.main.participants');
    }

    // Route : mavro
    public function getMavro()
    {
        return view('users.main.mavro');
    }

    // Route : referals
    public function getReferals()
    {
    	return view('users.main.referals');
    }

    // Route : profile
    public function getProfile()
    {
    	return view('users.main.profile');
    }

    // Route : letter-of-happiness
    public function getHappiness()
    {
    	return view('users.main.happiness');
    }

    // Route : promo-tasks
    public function getPromo()
    {
        return view('users.main.promo');
    }

     // Route : accounts
    public function getAccounts()
    {
        return view('users.account.index');
    }


     // Route : provide-help
    public function getProvideHelp()
    {
        return view('users.main.providehelp');
    }

    // Route : get-help
    public function getGetHelp()
    {
        return view('users.main.gethelp');
    }

     // Route : notices
    public function getNotices()
    {
        return view('users.main.notices');
    }

     // Route : news
    public function getNews()
    {
        return view('users.main.news');
    }

     // Route : faq
    public function getFaq()
    {
        return view('users.main.faq');
    }

     // Route : promotion-materials
    public function getPromotionMaterials()
    {
        return view('users.main.promotionmaterials');
    }

     // Route : webnair
    public function getWebnair()
    {
        return view('users.main.webnair');
    }

     // Route : support
    public function getSupport()
    {
        return view('users.main.support');
    }

     // Route : web-task-archive
    public function getWebTask()
    {
        return view('users.main.webtask');
    }

     // Route : instructions
    public function getInstructions()
    {
        return view('users.main.instructions');
    }





}

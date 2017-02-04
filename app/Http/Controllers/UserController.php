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

    // Route : dashboard
    public function getDashboard()
    {
    	return view('users.dashboard');
    }

    // Route : trustee
    public function getTrustee()
    {
    	return view('users.trustee');
    }

    // Route : referals
    public function getReferals()
    {
    	return view('users.referals');
    }

    // Route : profile
    public function getProfile()
    {
    	return view('users.profile');
    }

    // Route : letter-of-happiness
    public function getHappiness()
    {
    	return view('users.happiness');
    }

    // Route : promo-tasks
    public function getPromo()
    {
        return view('users.promo');
    }

     // Route : accounts
    public function getAccounts()
    {
        return view('users.accounts');
    }

     // Route : provide-help
    public function getProvideHelp()
    {
        return view('users.providehelp');
    }

    // Route : get-help
    public function getGetHelp()
    {
        return view('users.gethelp');
    }

     // Route : notices
    public function getNotices()
    {
        return view('users.notices');
    }

     // Route : news
    public function getNews()
    {
        return view('users.news');
    }

     // Route : faq
    public function getFaq()
    {
        return view('users.faq');
    }

     // Route : promotion-materials
    public function getPromotionMaterials()
    {
        return view('users.promotionmaterials');
    }

     // Route : webnair
    public function getWebnair()
    {
        return view('users.webnair');
    }

     // Route : support
    public function getSupport()
    {
        return view('users.support');
    }

     // Route : web-task-archive
    public function getWebTask()
    {
        return view('users.webtask');
    }

     // Route : instructions
    public function getInstructions()
    {
        return view('users.instructions');
    }





}

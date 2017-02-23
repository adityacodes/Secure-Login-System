<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth, Session;
class LoginController extends Controller
{
    public function postLogin(Request $request)
	  {
	    
	      $this->validate($request, array(
				'email' => 'required|exists:users',
	          	'password' => 'required'
			));
	 
	      $credentials = [
	          'email' => $request->email,
	          'password' => $request->password,
	          'confirmed' => 1
	      ];
	 
	      if ( ! Auth::attempt($credentials))
	      {
	        Session::flash('warning', 'Username or password incorrect.');
	        return Redirect::to('/');
	      }
	      Session::flash('success', 'You have successfully logged in.!');
	      return redirect()->intended('dashboard');

	  }
}

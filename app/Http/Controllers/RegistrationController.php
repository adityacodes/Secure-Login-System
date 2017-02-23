<?php

namespace App\Http\Controllers;

use Input, Validator, Redirect, Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests, Response;

use App\Classes\phptextClass;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax', ['only' => ['captcha']]);
    }

    public function postRegister(Request $request)
    {

        $validator = Validator::make($request->all(), array(
            'name' => 'bail|required',
            'email' => 'bail|required|email|max:255|unique:users',
            'mobile' => 'bail|required',
            'password' => 'required|confirmed|min:6',
            'referal' => 'sometimes|integer',
            'captcha_code' => 'required',
            'toa' => 'required',
            ), $messages = [
                'name.required' => '**The user name field is required.',
                'email.required' => '**The user email field is required.',
                'password.required' => '**The password field is required.',
                'unique' => '*Your email id already exists. Please login to continue.',
                'mobile.required' => '**The mobile number field is required.',
                'captcha_code.required' => '**The Captcha field is required.',
                'toa.required' => '**You must agree to the terms of service before use..',
        ]);

        if(captcha_validate($request->captcha_code))
        {
            $validator->getMessageBag()->add('captcha_code', 'Please renter the captcha !!');
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($validator->fails()) {
            
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        //Referal-id of the person referred to is a string and not a number
        $confirmation_code = substr(md5(($request->name).'aditya') , 0, 10);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            're_id' => $request->referal,
            'confirmation_code' => $confirmation_code,
            'password' => bcrypt($request->password),
        ]);
        
        Mail::send('email.verify', [
            'confirmation_code' => $confirmation_code
        ], function($message) use ($request) {
            $message->from('admin@mmm-union.org', 'MMM UNION');
            $message->to($request->email, $request->name)->subject('Verification Link');
        });
        Session::flash('success', 'A verification link has been sent to your email. Please verify to login.');
        
        return redirect()->to('login');   
    }

    public function captcha()
    {
        // Response::header('Content-type', '');
        $phptextObj = new phptextClass();
        echo response('<img width="120" id="captchaimg" height="40" src="data:image/png;base64,'.base64_encode($phptextObj->phpcaptcha("#162453","#fff",120,40,10,25)).'" />', 200)->header('Content-Type', 'image/jpeg');

    }

    public function confirm($confirmation_code)
    {
        if(!$confirmation_code)
        {
            return redirect()->route('user.dashboard');
        }

        $user = User::where('confirmation_code', $confirmation_code)->first();

        if (!$user)
        {
            Session::flash('warning', 'Confirmation token seems to be invalid. Please check the !');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Session::flash('success', 'You have been successfully verified! Please login to continue');

        return Redirect::to('login');
    }

}

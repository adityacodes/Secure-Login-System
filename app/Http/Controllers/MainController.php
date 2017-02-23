<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getContact()
    {
    	return view('main.contactus');
    }

    public function postContact()
    {

        $validator = Validator::make($request->all(), array(
        	'theme' => 'required',
        	'message' => 'required',
            'name' => 'bail|required',
            'status' => 'required',
            'mobile' => 'bail|required',
            'email' => 'bail|required|email|max:255',
            'skype' => 'sometimes',
            'captcha_code' => 'required',
            ), $messages = [
        		'theme.required' => '**The theme field is required.',
                'message.required' => '**The message field is required.',
                'name.required' => '**The user name field is required.',
                'status.required' => '**The status field is required.',
                'email.required' => '**The user email field is required.',
                'unique' => '**Your email id already exists. Please login to continue.',
                'mobile.required' => '**The mobile number field is required.',
                'captcha_code.required' => '**The Captcha field is required.',
        ]);


        if(captcha_validate($request->captcha_code))
        {
            $validator->getMessageBag()->add('captcha_code', 'Please renter the captcha !!');
        }

        if ($validator->fails()) 
        {        
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }



    }
}

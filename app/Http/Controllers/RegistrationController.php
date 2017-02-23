<?php

namespace App\Http\Controllers;

use Input, Validator, Redirect, Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Classes\phptextClass;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax', ['only' => ['captcha']]);
    }

    public function postRegister(Request $request)
    {
        $captcha = Session::get('captcha_code');

        $validator = Validator::make($request->all(), array(
            'name' => 'bail|required',
            'email' => 'bail|required|email|max:255|unique:users',
            'mobile' => 'bail|required',
            'password' => 'required|confirmed|min:6',
            'referal' => 'sometimes|exists:users,referfriend',
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

        if($request->captcha_code != $captcha)
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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'referalid' => $request->referal,
            'password' => bcrypt($request->password),
        ]);
        
        
        
        return redirect()->to('register');   
    }

    public function captcha()
    {
        $phptextObj = new phptextClass();
        $imgsrc = base64_encode($phptextObj->phpcaptcha('#162453','#fff',120,40,10,25));
        $imgarray = array('imgsrc' => 'data:image/jpeg;base64,'.$imgsrc);
        header('Content-type: application/json');
        echo json_encode($imgarray);
    }

}

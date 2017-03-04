<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getProfileData()
    {

    	$userinfo = User::where('id', Auth::user()->id)->first();
    	$groups = array();
    	$groups[0] = 'General Information(click on the name,then enter the data and then hit (SAVE) down on the bottom left hand side)';
    	$groups[1] = 'Contacts';
    	$groups[2] = 'Personal Information';
    	echo '{
			"total": 18,
			"rows": [{
				"name": "FirstName",
				"value": "'.$userinfo->name.'",
				"group": "'.$groups[0].'",
				"editor": "text"
			}, {
				"name": "LastName",
				"value": " ",
				"group": "'.$groups[0].'",
				"editor": "text"
			}, {
				"name": "Email",
				"value": "'.$userinfo->email.'",
				"group": "'.$groups[0].'",
				"editor": {
					"type": "validatebox",
					"options": {
						"validType": "email"
					}
				}
			}, {
				"name": "Mobile",
				"value": "'.$userinfo->mobile.'",
				"group": "'.$groups[0].'",
				"editor": "numberbox"
			}, {
				"name": "Country",
				"value": "'.$userinfo->country.'",
				"group": "'.$groups[0].'",
				"editor": "text"
			}, {
				"name": "Region",
				"value": "'.$userinfo->region.'",
				"group": "'.$groups[0].'",
				"editor": "text"
			}, {
				"name": "City",
				"value": "'.$userinfo->city.'",
				"group": "'.$groups[0].'",
				"editor": "text"
			}, {
				"name": "Registration Date",
				"value": "'.$userinfo->created_at.'",
				"group": "'.$groups[0].'",
				"editor": {"type": "text",
					"options":{"readonly":false,"disabled":false,"multiline":true,"editable":true}
				}
			}, {
				"name": "DOB",
				"value": "'.$userinfo->dob.'",
				"group": "'.$groups[0].'",
				"editor": "datebox"
			}, {
				"name": "Skype",
				"value": "'.$userinfo->skype.'",
				"group": "'.$groups[1].'",
				"editor": "text"
			}, {
				"name": "Yahoo! Messenger",
				"value": "'.$userinfo->yahoo.'",
				"group": "'.$groups[1].'",
				"editor": "text"
			}, {
				"name": "Website",
				"value": "'.$userinfo->website.'",
				"group": "'.$groups[1].'",
				"editor": "text"
			}, {
				"name": "Facebook",
				"value": "'.$userinfo->facebook.'",
				"group": "'.$groups[1].'",
				"editor": "text"
			}, {
				"name": "Google",
				"value": "'.$userinfo->google.'",
				"group": "'.$groups[1].'",
				"editor": "text"
			}, {
				"name": "Twitter",
				"value": "'.$userinfo->twitter.'",
				"group": "'.$groups[1].'",
				"editor": "text"
			}, {
				"name": "Information",
				"value": "'.$userinfo->information.'",
				"group": "'.$groups[2].'",
				"editor": "text"
			}, {
				"name": "Contacts",
				"value": "'.$userinfo->contacts.'",
				"group": "'.$groups[2].'",
				"editor": "text"
			}]
		}';

    }

    public function saveProfile(Request $request)
    {
    	$user = User::find(Auth::user()->id);

    	$user->name = $request->firstname;
    	$user->mobile = $request->mobile;
    	$user->dob = $request->dob;
    	$user->country = $request->country;
    	$user->region = $request->region;
    	$user->city = $request->city;
    	$user->skype = $request->skype;
    	$user->twitter = $request->twitter;
    	$user->website = $request->website;
    	$user->yahoo = $request->yahoo;
    	$user->facebook = $request->facebook;
    	$user->google = $request->google;
    	$user->information = $request->information;
    	$user->contacts = $request->contacts;

    	$user->save();
        $result = array('Success'=>true, 'Message'=>'Account deleted successfully.');
        echo json_encode($result);
    }

    public function saveProfileInfo(Request $request)
    {
    	$user = User::find(Auth::user()->id);
    	if($request->receive_mails)
    		$user->receive_mails =  1;
    	else
    		$user->receive_mails =  0;

    	if($request->send_sms)
    		$user->send_sms = 1;
    	else
    		$user->send_sms =  0;

    	if($request->show_nick)
    		$user->show_nick = 1;
    	else
    		$user->show_nick =  0;

    	if($request->show_email_public)
    		$user->show_email_public = 1;
    	else
    		$user->show_email_public =  0;

    	$user->save();
        $result = array('Success'=>true, 'Message'=>'Account info saved successfully.');
        echo json_encode($result);
    }
}

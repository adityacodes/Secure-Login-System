<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;
use Session, Auth;

class ManageAccountController extends Controller
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
     * Display a listing of the resource.
     *
     * @return JSON Response
     */
    public function getAccounts()
    {
        //JSON Response for this.
        $accounts = Account::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        $total = $accounts->total() + (10 - ($accounts->total())%10);
        $result['total'] = $total;
        $items = array();

        foreach ($accounts as $account) {
            array_push($items, $account); 
        }
        $result['rows'] = $items;

        echo json_encode($result);
    }

    public function storeAccount(Request $request)
    {
        // Account details
        $this->validate($request,array(
            'ac_name' => 'required',
            'ac_currency' => 'required',
            'ac_number' => 'required',
            'beneficiary_name' => 'required',
        )); 

        $account = new Account;
        $account->ac_id = 'ACC'.time();//Timestamp
        $account->ac_name = $request->ac_name;
        $account->ac_currency = $request->ac_currency;
        $account->ac_number = $request->ac_number;
        $account->beneficiary_name = $request->beneficiary_name;
        $account->ac_holder = Auth::user()->name;
        $account->ac_type = 'BTC';
        $account->bank_name = 'Bitcoin';
        $account->user_id = Auth::user()->id;
        $account->save();

        echo '{"Success":true, "Message":"Account saved successfully."}';
    }

    public function updateAccount(Request $request, $id)
    {
        $account = Account::find($id);

        $this->validate($request,array(
            'ac_name' => 'required',
            'ac_currency' => 'required',
            'ac_number' => 'required',
            'beneficiary_name' => 'required',
        ));

        $account->ac_name = $request->ac_name;
        $account->ac_currency = $request->ac_currency;
        $account->ac_number = $request->ac_number;
        $account->beneficiary_name = $request->beneficiary_name;
        $account->ac_holder = Auth::user()->name;
        $account->ac_type = 'BTC';
        $account->bank_name = 'Bitcoin';
        $account->user_id = Auth::user()->id;
        $account->save();

        echo '{"Success":true, "Message":"Account saved successfully."}';
    }

    public function destroyAccount($id)
    {
        $account = Account::find($id);
        $account->delete();
        $result = array('Success'=>true, 'Message'=>'Account deleted successfully.');
        echo json_encode($result);
    }
}

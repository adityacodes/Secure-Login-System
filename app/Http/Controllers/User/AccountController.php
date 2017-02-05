<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Account;

class AccountController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::where('user_id', Auth::user()->id)->get();
        return view('users.account.index')->withAccounts($accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Account details
        $this->validate($request,array(
            'account_name' => 'required',
            'account_currency' => 'required',
            'account_number' => 'required',
            'beneficiary_name' => 'required',
        ));

        $account = new Account;
        $account->account_name = $request->account_name;
        $account->account_currency = $request->account_currency;
        $account->account_number = $request->account_number;
        $account->beneficiary_name = $request->beneficiary_name;
        $account->bank_name = 'Bitcoin';
        $account->user_id = Auth::user()->id;
        $account->save();

        Session::flash('success', 'Account was successfully added');
        return redirect()->route('users.account.show', $account->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Account::find($id);
        return view('users.account.show')->withAccount($account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::find($id);
        return view('users.account.edit')->withAccount($account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $account = Account::find($id);

        $this->validate($request,array(
            'account_name' => 'required',
            'account_currency' => 'required',
            'account_number' => 'required',
            'beneficiary_name' => 'required',
            'account_number' => 'required',
        ));

        $account->account_id = 'A'.$id;
        $account->account_name = $request->account_name;
        $account->account_currency = $request->account_currency;
        $account->account_number = $request->account_number;
        $account->beneficiary_name = $request->beneficiary_name;
        $account->bank_name = 'Bitcoin';
        $account->user_id = Auth::user()->id;
        $account->save();

        Session::flash('success', 'Account updated successfully.');
        return redirect()->route('users.account.show', $account->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::find($id);
        $account->delete();
        Session::flash('Success', 'Account deleted Successfully');
        return redirect()->route('users.account.index');
    }
}

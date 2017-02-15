@extends('layouts.user')

@section('title', 'CREATE ACCOUNT')

@section('content')
<div class="panel-body">

	<div class="container">
		<form method="POST" action="{{ route('users.account.store') }}" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}

                <div class="form-group{{ $errors->has('account_name') ? ' has-error' : '' }}">
                    <label for="account_name" class="col-md-4 control-label">Account Name</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user fa-fw"></i>
                            </span>
                                <input id="account_name" title="Name this account as you like." type="text" class="form-control" name="account_name" value="{{ old('account_name') }}">
                        </div>

                        @if ($errors->has('account_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('account_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('account_currency') ? ' has-error' : '' }}">
                    <label for="account_currency" class="col-md-4 control-label">Account Currency</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-money fa-fw"></i>
                            </span>
                            	<select id="account_currency" type="text" class="form-control" name="account_currency" >
                            		<option value="BTC">BTC</option>
                            	</select>
                        </div>

                        @if ($errors->has('account_currency'))
                            <span class="help-block">
                                <strong>{{ $errors->first('account_currency') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                    <label for="account_number" class="col-md-4 control-label">Account Number</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-info fa-fw"></i>
                            </span>
                                <input id="account_number" type="text" class="form-control" name="account_number" value="{{ old('account_number') }}">
                        </div>

                        @if ($errors->has('account_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('account_number') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('beneficiary_name') ? ' has-error' : '' }}">
                    <label for="beneficiary_name" class="col-md-4 control-label">Beneficiary Name</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-info fa-fw"></i>
                            </span>
                                <input id="beneficiary_name" type="text" class="form-control" name="beneficiary_name" value="{{ old('beneficiary_name') }}">
                        </div>

                        @if ($errors->has('beneficiary_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('beneficiary_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                    <label for="bank_name" class="col-md-4 control-label">Bank Name</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-info fa-fw"></i>
                            </span>
                                <input id="bank_name" type="text" class="form-control" disabled="true" name="bank_name" value="Bitcoin">
                        </div>

                        @if ($errors->has('bank_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <h4 class="text-center bold">
			ATTENTION! You are only allowed to add the details of your own bank account or your own bitcoin wallet. Otherwise you will be penalized. Multiple accounts with the same bank account are strictly prohibited. Please read the RECOMMENDATIONS for more information.
		</h4>

                <div class="form-group">
                    	<button type="button" class="btn btttn">
                            <i class="fa fa-btn fa-times"></i> CANCEL
                        </button>
                        <button type="submit" class="btn btttn">
                            <img width="16" height="16" src="{{asset('icons/tick.png')}}">  SAVE
                        </button>
                </div>
		</form>


		


	</div>

</div>
@endsection
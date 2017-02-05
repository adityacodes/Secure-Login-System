@extends('layouts.user')


@section('content')


	<div class="container">
		<form action="{{ route('users.account.store') }}" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}

                <div class="form-group{{ $errors->has('account_name') ? ' has-error' : '' }}">
                    <label for="account_name" class="col-md-4 control-label">Account Name</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-info fa-fw"></i>
                            </span>
                                <input id="account_name" type="text" class="form-control" name="account_name" value="{{ $account->account_name }}">
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
                                <i class="fa fa-info fa-fw"></i>
                            </span>
                                <input id="account_currency" type="text" class="form-control" name="name" value="{{ $account->account_currency }}">
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
                                <input id="account_number" type="text" class="form-control" name="account_number" value="{{ $account->account_number }}">
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
                                <input id="beneficiary_name" type="text" class="form-control" name="beneficiary_name" value="{{ $account->beneficiary_name }}">
                        </div>

                        @if ($errors->has('beneficiary_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('beneficiary_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                    <label for="bank_name" class="col-md-4 control-label">Beneficiary Name</label>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-info fa-fw"></i>
                            </span>
                                <input id="bank_name" type="text" class="form-control" name="bank_name" value="{{ $account->bank_name }}">
                        </div>

                        @if ($errors->has('bank_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bank_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
		</form>


	</div>


@endsection
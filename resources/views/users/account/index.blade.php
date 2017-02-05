@extends('layouts.user')


@section('content')

	
	<table class="table table-hover">
	    <thead>
	      <tr>
	        <th>ACCOUNT ID</th>
	        <th>ACCOUNT NAME</th>
	        <th>CURRENCY CODE</th>
	        <th>BANK</th>
	        <th>ACCOUNT NUMBER</th>
	        <th>ACCOUNT HOLDER</th>
	        <th>DETAILS</th>
	        <th>ACTIONS</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($accounts as $account)
		      <tr>
		        <td>$account->account_id</td>
		        <td>$account->account_name</td>
		        <td>$account->account_currency</td>
		        <td>$account->bank_name</td>
		        <td>$account->account_number</td>
		        <td>$account->account_holder</td>
		        <td>$account->beneficiary_name</td>
		        <td class="actions">
                    <a href="{{ route('users.account.show', $account->id)}}">
                        <button class="btn btn-md btn-primary">
                            <h6><i class="fa fa-eye" aria-hidden="true"></i>
                            View</h6>
                        </button>
                    </a>
                    <a href="{{ route('users.account.edit', $account->id) }}">
                        <button class="btn btn-md btn-warning">
                            <h6><i class="fa fa-pencil" aria-hidden="true"></i>
                            Edit</h6>
                        </button>
                    </a>
                    <a href="{{ route('users.account.delete', $account->id) }}">
                        <button class="btn btn-md btn-warning">
                            <h6><i class="fa fa-times" aria-hidden="true"></i>
                            Delete</h6>
                        </button>
                    </a>
		        </td>
		      </tr>
		    @endforeach

	    </tbody>
  	</table>
	




@endsection
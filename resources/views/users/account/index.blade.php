@extends('layouts.user')

@section('title', 'Personal accounts')

@section('stylesheets')
<style type="text/css">
	.black-header{
		background-color: #9A9484;
		color: white;
		font-weight: bold;
		margin: 0;
		padding: 10px;
	}
	.lightgrey-header{
		padding: 2px;
		background-color: #EFEFEF;
	}

</style>



@endsection

@section('content')
<div class="panel-body" style="padding: 0;">
	<div class="black-header">Personal Accounts</div>
	<div class="lightgrey-header"> 
			<a href="{{ route('users.account.create')}}">
                <button class="btn btn-md btttn">
                    <h5><i class="fa fa-plus" aria-hidden="true"></i>
                    Add</h5>
                </button>
            </a>

	</div>
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
		        <td>{{$account->account_id}}</td>
		        <td>{{$account->account_name}}</td>
		        <td>{{$account->account_currency}}</td>
		        <td>{{$account->bank_name}}</td>
		        <td>{{$account->account_number}}</td>
		        <td>{{$account->account_holder}}</td>
		        <td>{{$account->beneficiary_name}}</td>
		        <td class="actions">
		                    
		        	<form class="form-inline" method="DELETE" action="{{route('users.account.destroy', $account->id)}}"  >
		                    <a href="{{ route('users.account.edit', $account->id) }}">
		                        <button type="button" class="btn btttn">
		                            <i class="fa fa-pencil" aria-hidden="true"></i>
		                            Edit
		                        </button>
		                    </a>
                    		{{ csrf_field() }}
                    		<button class="btn btttn">
	                            <i class="fa fa-times" aria-hidden="true"></i>
	                            Delete
	                        </button>
                    </form>
		        </td>
		      </tr>
		    @endforeach

	    </tbody>
  	</table>
	


</div>

@endsection
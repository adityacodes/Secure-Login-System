@extends('layouts.user')


@section('content')


	<div class="container">
		<table class="table table-hover">
		    <tbody>
			      <tr>
			      		<td>ACCOUNT ID</td>
			        	<td>$account->account_id</td>
			       </tr>
			       <tr>
			       		<td>ACCOUNT NAME</td>
			        	<td>$account->account_name</td>
			       </tr>
			       <tr>
			       		<td>CURRENCY CODE</td>
			        	<td>$account->account_currency</td>
			       </tr>
			       <tr>
			       		<td>BANK</td>
			        	<td>$account->bank_name</td>
			       </tr>
			       <tr>
			       		<td>ACCOUNT NUMBER</td>
			        	<td>$account->account_number</td>
			       </tr>
			       <tr>
			       		<td>ACCOUNT HOLDER</td>
			        	<td>$account->account_holder</td>
			       </tr>
			       <tr>
			       		<td>DETAILS</td>
			        	<td>$account->beneficiary_name</td>
			       </tr>

		    </tbody>
	  	</table>


	</div>


@endsection
@extends('layouts.user')

@section('title', 'SHOW ACCOUNT')

@section('stylesheets')
<style type="text/css">
	.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
		border: 1px solid black;
	}
</style>
@endsection

@section('content')

<div class="panel-body">
	<div class="container">
		<div class="col-md-6">
				<table class="table table-hover table-bordered">
				    <tbody>
					      <tr>
					      		<td>ACCOUNT ID</td>
					        	<td>{{$account->account_id}}</td>
					       </tr>
					       <tr>
					       		<td>ACCOUNT NAME</td>
					        	<td>{{$account->account_name}}</td>
					       </tr>
					       <tr>
					       		<td>CURRENCY CODE</td>
					        	<td>{{$account->account_currency}}</td>
					       </tr>
					       <tr>
					       		<td>BANK</td>
					        	<td>{{$account->bank_name}}</td>
					       </tr>
					       <tr>
					       		<td>ACCOUNT NUMBER</td>
					        	<td>{{$account->account_number}}</td>
					       </tr>
					       <tr>
					       		<td>ACCOUNT HOLDER</td>
					        	<td>{{$account->account_holder}}</td>
					       </tr>
					       <tr>
					       		<td>DETAILS</td>
					        	<td>{{$account->beneficiary_name}}</td>
					       </tr>

				    </tbody>
			  	</table>

		</div>
		


	</div>
</div>

@endsection
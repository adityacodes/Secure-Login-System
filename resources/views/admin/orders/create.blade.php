@extends('layouts.admin')


@section('title', 'CREATE ORDER')


@section('content')

	<br><br>

	<a href="{{url('admin/orders')}}">CANCEL</a>

	<form method="POST" action="{{url('admin/orders')}}">
		ORDER ID : <input type="text" name="or_id">
		ASSIGNMENT ID : <input type="text" name="or_as_id">
		ORDER AMOUNT : <input type="text" name="or_as_id">
		ORDER TO : <input type="text" name="or_to">
		{{Form::token()}}
		ORDER FOR : <input type="text" name="or_for"> 
		{{-- ORDER FOR IS FOR THE ONE WHO CREATED THE ASSINGMENT AND ADMIN --}}


		<input type="submit"  value="SUBMIT" >
	</form>



@endsection
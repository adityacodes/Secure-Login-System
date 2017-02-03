@extends('layouts.user')


@section('title', 'Dashboard')

@section('stylesheets')
	<style type="text/css">
			
	</style>
	

@endsection

@section('content')

<div class="container">    			
	<div class="alert alert-info text-center">
		 <strong><a href="{{url('/warning')}}" class="alert-link">WARNING!</a></strong> <span style="color: red;">THIS IS A COMMUNITY OF MUTUAL FINANCIAL HELP!</span> Participate only with spare money. Don't contribute all the money you have.
	</div>

	<div class="row text-center">
		<img class="img-center" src="{{asset('/image/image1.png')}}">
	</div>

	<div class="row"><br><br>
		<div class="col-md-6 text-left">
			<button class="btn btn-lg btn-block btn-success"><h1>Provide Help</h1>
			  Acquire Mavro<em>(make contribution)</em>
			</button>
		</div>
		<div class="col-md-6 text-left">
			<button class="btn btn-lg btn-block btn-info "><h1>Get Help</h1>
				"Cash-out" Mavro
			</button>
		</div>
	</div>
</div>

@endsection
@extends('layouts.user')


@section('title', 'Dashboard')

@section('stylesheets')
	<style type="text/css">
	.span10{
		margin-top: 20px;
	}
	a:hover{
		text-decoration: none;
	}
	</style>


@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-12 alert alert-info text-center">
			<strong>
				<a href="{{url('/warning')}}" class="alert-link">WARNING!</a>
			</strong> 
			<span style="color: red;">THIS IS A COMMUNITY OF MUTUAL FINANCIAL HELP!</span> 
			Participate only with spare money. Don't contribute all the money you have.
		</div>	

	</div> 

	<div class="row">
		<div class="col-md-12">
			<img class="img-center img-responsive" style="width: 100%;" src="{{asset('/image/image1.png')}}">
		</div>
		<div class="col-md-12 span10">
			<img class="img-center img-responsive" style="width: 100%;" src="{{asset('/image/mavro.png')}}">
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
				<div class="col-md-6 col-xs-12">
					<a href="{{ url('/provide-help') }}">
						<button class="btn btn-lg btn-block btn-success"><h1>Provide Help</h1>
							Acquire Mavro<em>(make contribution)</em>
						</button>
					</a>
				</div>
				<div class="col-md-6 col-xs-12">
					<a href="{{ url('/get-help') }}">
						<button class="btn btn-lg btn-block btn-info "><h1>Get Help</h1>
							"Cash-out" Mavro
						</button>
					</a>
				</div>

		</div>
		
	</div>
</div>

@endsection
@extends('layouts.user')


@section('title', 'PROMO TASKS')


@section('content')


<div class="container">
	<div class="col-md-12">
		<div class="row">
			<h2>Tasks | PROMO TASKS</h2>
				<ul class="list-inline pull-right">
					<li>
						<a href="{{ url('/web-task-archive') }}">
							<button class="btn btttn"> 
								<img width="16" height="16" src="{{asset('icons/archive.png')}}"> WEB-TASK ARCHIVE
							</button> 
						</a>
					</li>
					<li>
						<a href="{{ url('/promo-tasks') }}">
							<button class="btn btttn"> 
								<img width="16" height="16" src="{{asset('icons/information.png')}}"> INSTRUCTIONS
							</button> 
						</a>
					</li>
				</ul>
			
		</div>

		<div class="row alert-box">
			<h4 style="color: red;" class="bold">
				Performing PromoTasks is your contribution into the System`s development.<br>
				It makes MMM more popular, increases traffic to the website as well as the number of registrations. Together we change the world!
			</h4>
		</div>

		<div class="row">
			<h3 class="text-center bold">Select a type of a task you want to accomplish:</h3>

			<div class="alert alert-box">
					<h3 class="text-success"> ONline Web Task </h3>
					<h4>Perform PromoTasks. Come here every day to complete a few PromoTasks! Work for the benefit of MMM :-)) </h4>
					<button class="pull-right btn btttn"><img width="16" height="16" src="{{asset('icons/tick.png')}}"> DO AN ONLINE TASK</button>
					<div class="clearfix"></div>
			</div>
		</div>

		<div class="row">

			<div class="alert alert-box">
					<h3 class="text-warning"> OFFline Task </h3>
					<h4>By completing OFFline tasks, you will not only get Referral Bonus but you benefit people in real life as they will find out about MMM. Promote MMM! </h4>
					<button class="pull-right btn btttn"><img width="16" height="16" src="{{asset('icons/tick.png')}}">  DO AN OFFLINE TASK</button>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>




@endsection

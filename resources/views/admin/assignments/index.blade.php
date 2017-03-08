@extends('layouts.admin')

@section('title', 'ADMIN ASSIGNMENTS')


@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">ASSIGNMENTS</h4>
                    	<h5 class="text-center">
							SELECT ASSIGNMENTS BY DATE :<input id="assbydate" type="date">
						</h5>
					<table border="1">
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead style="font-size: 10px">
							<th>ASSIGNMENT ID</th>
							<th>STATUS</th>
							<th>AMOUNT</th>
							<th>MESSAGE</th>
							<th>CANCEL REASON</th>
							<th>USER ID</th>
							<th>CREATED ON</th>
							<th>ACTIONS</th>
                        </thead>
                        <tbody>
						@foreach($assignments as $assignment)
							<tr>
								<td>{{$assignment->as_id}}</td>
								<td>{{$assignment->as_status}}</td>
								<td>{{$assignment->as_amount}}</td>
								<td>{{$assignment->as_message}}</td>
								<td>{{$assignment->as_cancel_reason}}</td>
								<td>{{$assignment->user_id}}</td>
								<td>{{$assignment->created_at}}</td>

								<td>
									@if($ordercreated)
										<a onclick="" href="" ><button class="btn btn-md btn-success" style="width: 80px; height: 30px; font-size: 12px">SHOW</button></a>
									@else
										<a onclick="" href="" ><button class="btn btn-md btn-success" style="width: 80px; height: 30px; font-size: 12px">CREATE</button></a>
									@endif
									{{-- On clicking create Order send this to orders/create with the assignment ID --}}
										<a onclick="" href="" ><button class="btn btn-md btn-danger" style="width: 80px; height: 30px; font-size: 12px">CANCEL</button></a>
								</td>
							</tr>
						@endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
	                	{!! $assignments->render() !!}
	                </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
	<script type="text/javascript">
		
		$('#assbydate').change(function(){
			// Filter assignments by Date using AJAX REQUEST
		});




	</script>




@endsection


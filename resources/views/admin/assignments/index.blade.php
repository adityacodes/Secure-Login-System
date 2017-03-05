@extends('layouts.admin')

@section('title', 'ADMIN ASSIGNMENTS')


@section('content')
	<br>
	<br>
	SELECT ASSIGNMENTS BY DATE :<input id="assbydate" type="date"><br>
	<table border="1">
		<thead>
			<th>ASSIGNMENT ID</th>
			<th>STATUS</th>
			<th>AMOUNT</th>
			<th>MESSAGE</th>
			<th>CANCEL REASON</th>
			<th>USER ID</th>
			<th>CREATED ON</th>
			<th>Actions</th>
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
							<button>SHOW ORDER</button>
						@else
							<button>CREATE ORDER</button>
						@endif
						{{-- On clicking create Order send this to orders/create with the assignment ID --}}
						<button>CANCEL ASSIGNMENT</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection


@section('scripts')
	<script type="text/javascript">
		
		$('#assbydate').change(function(){
			// Filter assignments by Date using AJAX REQUEST
		});




	</script>




@endsection


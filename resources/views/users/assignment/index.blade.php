<div style="font-size: 14px;">
	
	Total: {{$assignments->total()}}
</div>

@foreach($assignments as $as)
<div class="box" style="border-radius: 4px; border:1px solid grey; padding: 10px;">
	Request to get help

		<p>Z {{ $as->as_id }}</p>
		Participant: {{Auth::user()->name}} <br>
		Amount: {{ $as->as_amount}}	<br>
		Balance: Fetch from user account here	<br>
		Date: {{ $as->created_at }}	<br>

		Status : {{ $as->as_status }} <br>

		{!! Form::open(['route' => ['users.assignment.destroy', $as->id], 'method' =>'DELETE', 'class' => 'col-md-6']) !!}
    			<button class="btn btn-danger"><i class="ti-close"></i> Cancel Request</button>
		{!! Form::close() !!}

		<button class="btn btttn pull-right">Details</button>
		<div class="clearfix"></div>
				
</div>
@endforeach
{!! $assignments->render() !!}
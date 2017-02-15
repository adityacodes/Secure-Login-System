@foreach($assignments as $as)
<div class="box" style="border-radius: 4px; border:1px solid grey; padding: 10px;">
	Request to get help

		<p>Z {{ $as->as_id }}</p>
		Participant: {{Auth::user()->name}} <br>
		Amount: {{ $as->as_amount}}	<br>
		Balance: {{ $as->as_id }}	<br>
		Date: {{ $as->created_at }}	<br>

		Status : {{ $as->as_status }} <br>

		Cancel Request			
</div>
@endforeach
{!! $assignments->render() !!}
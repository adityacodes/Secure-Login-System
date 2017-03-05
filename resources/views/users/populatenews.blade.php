@foreach($news as $n)

<div class="news">
	
	<p><h3>{{$n->subject}}</h3> -- {{$n->message}}</p>

</div> <br>

@endforeach
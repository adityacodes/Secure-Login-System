<div style="font-size: 14px;">
	<ul class="list-inline">
		<li><select>
			<option>10</option>
			<option>20</option>
			<option>30</option>
		</select></li>
		<li>Total: {{$assignments->total()}}</li>
	</ul>
	
</div>
<style type="text/css">
    .paneladi{
        background: grey;
        background: -moz-linear-gradient(top, #51bbd2 0%, #2d97af 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #51bbd2), color-stop(100%, #2d97af));
        background: -webkit-linear-gradient(top, #51bbd2 0%, #2d97af 100%);
        background: -o-linear-gradient(top, #51bbd2 0%, #2d97af 100%);
        background: -ms-linear-gradient(top, #51bbd2 0%, #2d97af 100%);
        background: linear-gradient(to bottom, #51bbd2 0%, #2d97af 100%);
    }
</style>

@foreach($assignments as $as)

            <div class="sidebar-module sidebar-module-inset" >
                <div class="panel panel-default">
                    <div class="panel-body paneladi" style="border:1px solid black; border-radius: 10px;">
                        <div class="row">
                            <div class="col-sm-9"><h5><strong>Request to get help <br> Z {{ $as->as_id }}!</strong></h5>
                                <h6>Participant: {{Auth::user()->name}}<br>Amount: {{ $as->as_amount}} Mavro-USD<br>Balance: 0 Mavro-USD<br>Date: {{ $as->created_at }}<br>Status: {{ $as->as_status }}Order processing</h6>
                            </div>
                            <div class="col-sm-1"><span style="font-size: 20px" class="fa fa-arrow-right" aria-hidden="true"></span></div>
                        </div>

                        <p>{!! Form::open(['route' => ['users.assignment.destroy', $as->id], 'method' =>'DELETE', 'class' => 'col-md-6']) !!}
				    			<button class="btn btn-default btn-xs"><i class="ti-close"></i> Cancel Request</button>
						{!! Form::close() !!}
                        <a class="btn btn-default btn-xs" href="#" role="button">Details>></a></p>
                    </div>
                </div>
            </div>		
@endforeach
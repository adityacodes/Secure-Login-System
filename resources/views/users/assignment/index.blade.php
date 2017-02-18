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

    .arrg {
        font-family: Arial,Helvetica,sans-serif;
        font-size: 14px;
        color: #050505;
        padding: 0px 10px 0px 10px;
        background: -moz-linear-gradient(top,#ffffff 0%,#ebebeb 50%,#dbdbdb 50%,#b5b5b5);
        background: rgb(234,239,242);
        background: -moz-linear-gradient(top,rgba(234,239,242,1) 0%,rgba(218,227,232,1) 50%,rgba(204,213,220,1) 51%,rgba(232,237,242,1) 100%);
        background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,rgba(234,239,242,1)),color-stop(50%,rgba(218,227,232,1)),color-stop(51%,rgba(204,213,220,1)),color-stop(100%,rgba(232,237,242,1)));
        background: -webkit-linear-gradient(top,rgba(234,239,242,1) 0%,rgba(218,227,232,1) 50%,rgba(204,213,220,1) 51%,rgba(232,237,242,1) 100%);
        background: -o-linear-gradient(top,rgba(234,239,242,1) 0%,rgba(218,227,232,1) 50%,rgba(204,213,220,1) 51%,rgba(232,237,242,1) 100%);
        background: -ms-linear-gradient(top,rgba(234,239,242,1) 0%,rgba(218,227,232,1) 50%,rgba(204,213,220,1) 51%,rgba(232,237,242,1) 100%);
        background: linear-gradient(to bottom,rgba(234,239,242,1) 0%,rgba(218,227,232,1) 50%,rgba(204,213,220,1) 51%,rgba(232,237,242,1) 100%);
        border-radius: 16px;
        -moz-border-radius: 16px;
        -webkit-border-radius: 16px;
        border: 1px solid #949494;
        -moz-box-shadow: 0px 1px 3px rgba(153,070,153,0.5),inset 0px 0px 2px rgba(255,255,255,1);
        -webkit-box-shadow: 0px 1px 3px rgba(153,070,153,0.5),inset 0px 0px 2px rgba(255,255,255,1);
        text-shadow: 0px -1px 0px rgba(000,000,000,0.2),0px 1px 0px rgba(255,255,255,1);
    }


</style>

@foreach($assignments as $as)

            <div class="sidebar-module sidebar-module-inset" >
                <div class=" panel-default">
                    <div class="panel-body arrg" style="border:1px solid black; border-radius: 10px;">
                        <div class="row">
                            <div class="col-sm-9"><h5><strong>Request to get help <br> Z {{ $as->as_id }}!</strong></h5>
                                <h6>Participant: {{Auth::user()->name}}<br>Amount: {{ $as->as_amount}} Mavro-USD<br>Balance: 0 Mavro-USD<br>Date: {{ $as->created_at }}<br>Status: {{ $as->as_status }}Order processing</h6>
                            </div>
                            <div class="col-sm-1">
                            <br>
                                <span style="font-size: 20px" class="fa fa-arrow-right" aria-hidden="true"></span>
                            </div>
                        </div>

                        <p>{!! Form::open(['route' => ['users.assignment.destroy', $as->id], 'method' =>'DELETE', 'class' => 'col-md-6']) !!}
				    			<button class="btn btn-default btn-xs"><i class="ti-close"></i> Cancel Request</button>
						{!! Form::close() !!}
                        <a class="btn btn-default btn-xs col-md-offset-3" href="#" role="button">Details>></a></p>
                    </div>
                </div>
            </div>
            <br>		
@endforeach
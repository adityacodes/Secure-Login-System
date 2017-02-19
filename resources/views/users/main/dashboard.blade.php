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
	.modal-dialog{overflow:visible;min-height:100%!important;}
	input[type=checkbox]
	{
		height: 20px;
	}

	.panel-new{
		font-weight: bold;
		font-size: 14px;
		border-radius: 8px;
		border: 1px solid black;
	    background: rgb(251,202,67);
	    background: -moz-linear-gradient(top,
	    	rgba(252,234,187,1) 0%,
	    	rgba(252,205,77,1) 46%,
	    	rgba(248,181,0,1) 50%
	    );
	    background: -webkit-gradient(linear,left top,left bottom,
	    	color-stop(0%,rgba(252,234,187,1)),
	    	color-stop(46%,rgba(252,205,77,1)),
	    	color-stop(50%,rgba(248,181,0,1))
	    );
	    background: -webkit-linear-gradient(top,
	    	rgba(252,234,187,1) 0%,
	    	rgba(252,205,77,1) 46%,
	    	rgba(248,181,0,1) 50%);
	    background: -o-linear-gradient(top,
	    	rgba(252,234,187,1) 0%,
	    	rgba(252,205,77,1) 46%,
	    	rgba(248,181,0,1) 50%);
	    background: -ms-linear-gradient(top,
	    	rgba(252,234,187,1) 0%,
	    	rgba(252,205,77,1) 46%,
	    	rgba(248,181,0,1) 50%);
	    background: linear-gradient(to bottom,
	    	rgba(252,234,187,1) 0%,
	    	rgba(252,205,77,1) 46%,
	    	rgba(248,181,0,1) 50%);
	}
	h5, h6{
		font-weight: bold;
	}

	.arrg_out, .arrg_rout {
		overflow: hidden;
        border-radius: 16px;
        -moz-border-radius: 16px;
        -webkit-border-radius: 16px;
        border: 1px solid #949494;
        -moz-box-shadow: 0px 1px 3px rgba(153,070,153,0.5),inset 0px 0px 2px rgba(255,255,255,1);
        -webkit-box-shadow: 0px 1px 3px rgba(153,070,153,0.5),inset 0px 0px 2px rgba(255,255,255,1);
        text-shadow: 0px -1px 0px rgba(000,000,000,0.2),0px 1px 0px rgba(255,255,255,1);

        background: #f9f1db;
        background: -moz-linear-gradient(top,#f9f1db 0%,#f9ca52 100%);
        background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#f9f1db),color-stop(100%,#f9ca52));
        background: -webkit-linear-gradient(top,#f9f1db 0%,#f9ca52 100%);
        background: -o-linear-gradient(top,#f9f1db 0%,#f9ca52 100%);
        background: -ms-linear-gradient(top,#f9f1db 0%,#f9ca52 100%);
        background: linear-gradient(to bottom,#f9f1db 0%,#f9ca52 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f1db',endColorstr='#f9ca52',GradientType=0);
    }

	
	</style>


@endsection

@section('content')
<div class="panel-body">
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
				<img class="img-center img-responsive" style="width: 100%; height:75px;" src="{{asset('/image/image1.png')}}">
			</div>
			<div class="col-md-12 span10">
				<img class="img-center img-responsive" style="width: 100%; height:75px;" height="75" src="{{asset('/image/mavro.png')}}">
			</div>
		</div>

		<hr>

		<div class="row">
			{{Form::token()}}
			<table class="col-md-12" width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
	                <td class="col-md-6">
	                    <div id="put_help" class="ordin_button">
	                        <div>
	                            <span class="translate">I Want to Provide Help</span>
	                            <i class="translate" style="margin-top: 4px; padding-top: 0px; display: block">"Acquire" Mavro (Make a Contribution)</i>
	                        </div>
	                    </div>
	                </td>
	                <td class="col-md-6">
	                    <div id="get_help" class="ordout_button"> 
	                        <div>
	                            <span class="translate">Get Help</span><br />
	                            <i class="translate" style="margin-top: 4px; padding-top: 0px; display: block">"Cash in" your Mavro, (Make a Withdrawal)</i>
	                        </div>
	                    </div>
	                </td>
	            </tr>

			</table>
			
		</div>
		<hr>

		<div class="row">
			<div class="col-md-8">


					<div class="blog-main ">
			            <div class="panel-default"	>
			                <div class="panel-body arrg_out">
			                    <div class="row">
			                        <div class="col-sm-1">

			                        </div>
			                        <div class="col-sm-9">
			                            <h5>You confirmed funds reception (Request for help Z1487236390)</h5>
			                        </div>
			                        <div class="col-sm-2">
			                            <p><a class="btn btn-default btn-xs" href="#" role="button">Messages:0/0</a></p>
			                        </div>
			                    </div>
			                    <div class="row">
			                        <div class="col-sm-2"><i style="font-size: 50px; color:forestgreen" class="fa fa-check-circle" aria-hidden="true"></i></div>
			                        <div class="col-sm-2"><h5>Date of creation:<br>2016-12-13</h5>
			                        </div>
			                        <div class="col-sm-2"><h5>Great Tobin ><br>Bitcoin</h5>
			                        </div>
			                        <div class="col-sm-2"><h5><span style="color: blue;">20 USD</span></h5>
			                        </div>
			                        <div class="col-sm-3"><h5>> {{Auth::user()->name }}<br>Bitcoin</h5>
			                        </div>
			                        <div class="col-sm-1"><i class="fa fa-print" style="font-size: 50px; color:blue;" aria-hidden="true"></i></div>
			                    </div>
			                    <div class="row">
			                        <div class="col-sm-10">
			                            <h5>Number:<br><strong>R798559583</strong></h5>
			                        </div>
			                        <div class="col-sm-2">
			                        	<br>
			                        	<p><a class="btn btn-default btn-xs" href="#" role="button">Details>></a></p>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>


			</div>
			<div class="col-md-4" id="assignments">
				
				
			</div>

		</div>

	</div>
</div>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p></p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection


@section('scripts')


<script>
	$(document).ready(function(){
	    $("#put_help").click(function(){
			$.ajax({
				url: '{{ url('user/provide-help') }}',
				type: 'GET',
				success: function(result){
						$('.fa-spin').remove();
						$(".modal-body  p").empty().append(result);
    					$("#myModal").modal();
    				}
			});
	        
	    });

	    $("#get_help").click(function(){
				$('.fa-spin').remove();
				$("#myModal").modal('show', {backdrop: 'static'});
				$("#myModal .modal-body p").load('{{ url('users/assignment/create') }}');
	        
	    });
	});
	$("#assignments").load('{{ url('users/assignment') }}');


</script>



@endsection

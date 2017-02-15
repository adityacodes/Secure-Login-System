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
				ORDERS WILL BE PULLED HERE
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
			$.ajax({
				url: '{{ url('users/assignment/create') }}',
				type: 'GET',
				success: function(result){
						$('.fa-spin').remove();
						$(".modal-body  p").empty().append(result + "<div class='çlearfix'></div>");
    					$("#myModal").modal();
    				}
			});
	        
	    });

	    var current = 1;
	
		widget      = $(".step");
		btnnext     = $(".next");
		btnback     = $(".back"); 
		btnsubmit   = $(".submit");
	 
		// Init buttons and UI
		widget.not(':eq(0)').hide();
		hideButtons(current);
		setProgress(current);
	 
		// Next button click action
		btnnext.click(function(){
			if(current < widget.length){ 			
	                   widget.show(); 			
	                   widget.not(':eq('+(current++)+')').hide();
	  		   setProgress(current); 
		       } 		
	               hideButtons(current); 	
	       }); 	
	       // Back button click action 	
	       btnback.click(function(){ 		
	                if(current > 1){
					current = current - 2;
					btnnext.trigger('click');
				}
				hideButtons(current);
			});

	    
	});
	$("#assignments").load('{{ url('users/assignment') }}');

		
	 
	// Change progress bar action
	setProgress = function(currstep){
		var percent = parseFloat(100 / widget.length) * currstep;
		percent = percent.toFixed();
		$(".progress-bar")
	        .css("width",percent+"%")
	        .html(percent+"%");		
	}
	 
	// Hide buttons according to the current step
	hideButtons = function(current){
		var limit = parseInt(widget.length); 
	 
		$(".action").hide();
	 
		if(current < limit) btnnext.show(); 	if(current > 1) btnback.show();
		if (current == limit) { btnnext.hide(); btnsubmit.show(); }
	}
</script>



@endsection

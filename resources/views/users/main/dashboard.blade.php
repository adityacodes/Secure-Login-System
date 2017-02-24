@extends('layouts.user')


@section('title', 'Dashboard')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">


@endsection

@section('content')



	{{Form::token()}}
	<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>&nbsp;&nbsp;</td>


		</tr>
		<tr>
			<td width="50%">
				<div id="put_help" class="ordin_button">
					<div>
						<span class="translate">I Want to Provide Help</span>
						<i class="translate" style="margin-top: 4px; padding-top: 0px; display: block">"Acquire" Mavro (Make a Contribution)</i>
					</div>
				</div>
			</td>
			<td width="50%">
				<div id="get_help" class="ordout_button">
					<div>
						<span class="translate">Get Help</span><br />
						<i class="translate" style="margin-top: 4px; padding-top: 0px; display: block">"Cash in" your Mavro, (Make a Withdrawal)</i>
					</div>
				</div>
			</td>
		</tr>
	</table>
	<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="70%">
				ABCD IS A GOOD FRONTEND DEVELOPER
				paginate below
			</td>
			<td width="30%">
				paginate on top
				ABCD IS ALSO A GOOD DEVELOPER
			</td>
		</tr>

	</table>
	<div style="display: none">
		<div style="margin:20px 0;">
			<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#dlg').dialog('open')">Open</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#dlg').dialog('close')">Close</a>
		</div>
		<div id="dlg" class="easyui-dialog" title="Basic Dialog" data-options="iconCls:'icon-save'" style="width:400px;height:200px;padding:10px">
			The dialog content.
		</div>
	</div>

	<!----====================================================New Order Cancellation Start Here =============================== --->
	<div id="cancelOrderbox" class="easyui-dialog" title="Order Cancel" data-options="closed:true" style="width: 650px; height: 280px;">
		<div style="padding: 20px;">
			<div id="refname"></div>
			<p style="font-weight: bold; font-size: 15px;"><span id="oidlbl"></span></p>
			<p>
				<b>Reason for cancellation</b>
			</p>
			<p>
				<textarea id="CancellReasonInput" class="required" style="width: 400px; height: 100px;"></textarea>
			</p>
		</div>
	</div>
	<!----====================================================New Order Cancellation End Here =============================== --->
	<div id="OrderMessageBox" class="easyui-dialog" title="Order Message" data-options="closed:true,modal:true" style="width: 890px; height: 520px;">
		<div class="easyui-layout" data-options="fit:true">
			<div data-options="region:'east'" style="width: 200px; padding: 10px">
				<input type="file" name="msgFile" id="msgFile" />
			</div>
			<div data-options="region:'center'" style="overflow-y: scroll;">
				<div id="loadmsgbox"></div>
			</div>
			<div data-options="region:'south'" title="Write your message here" style="height: 120px; padding: 10px">
				<textarea name="messageInput" id="messageInput" style="height: 60px; width: 600px"></textarea>
			</div>
		</div>
	</div>

	{{--
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
          <button type="button" class="close" data-dismiss="modal"><i style="color:black" class="fa fa-times " aria-hidden="true"></i>
		  </button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p></p>
          
        </div>
        <div class="modal-footer">
          <button type="button" style="background-color:#FFDD57" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times fa-lg" style="color:red" aria-hidden="true"></i>
			  Close</button>
        </div>
      </div>
    </div>
  </div>
--}}


@endsection


@section('scripts')

{{--
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
--}}


@endsection

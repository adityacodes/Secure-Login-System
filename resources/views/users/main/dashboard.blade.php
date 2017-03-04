@extends('layouts.user')


@section('title', 'Dashboard')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@endsection

@section('content')
	<div data-options="region:'center'" style="padding-top: 20px; font-size: 13px; overflow-y: scroll;">
		<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" >
			<tr><td>&nbsp;&nbsp;</td></tr>
			<tr>
				<td width="50%">
					<div id="put_help" onclick="$('#puthelpbox').dialog('open')" class="ordin_button">
						<div>
							<span class="translate">I Want to Provide Help</span>
							<i class="translate" style="margin-top: 4px; padding-top: 0px; display: block">"Acquire" Mavro (Make a Contribution)</i>
						</div>
					</div>
				</td>
				<td width="50%">
					<div id="get_help" onclick="getHelp()" class="ordout_button">
						<div>
							<span class="translate">Get Help</span><br />
							<i class="translate" style="margin-top: 4px; padding-top: 0px; display: block">"Cash in" your Mavro, (Make a Withdrawal)</i>
						</div>
					</div>
				</td>
			</tr>
			<tr><td>&nbsp;&nbsp;</td></tr>
		</table>
		<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0" >
			<tr>
				<td align="center">
					<select class="easyui-combobox" name="Participant" label="Participant" style="width:450px" >
						<option value="ar">{{Auth::user()->name}} ({{Auth::user()->email}})</option>
					</select>
					<img src="{{asset('easyui/themes/icons/reload.png')}}">
				</td>
			</tr>
		</table>
		<br>
		<div style="font-size: small; padding-left: 500px"></div><br>
		<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="65%" valign="top">
					<div id="orders" class="easyui-panel" style="height:200px;border-style: none;"
					        data-options="href:'{{url('mmmuser/ordersofuser')}}?page=1'">
					</div>
					<div class="easyui-pagination" style="border:1px solid #ccc;"
					        data-options="
					            total: {{ $totalorders }},
					            pageSize: 10,
					            onSelectPage: function(pageNumber, pageSize){
					                $('#orders').panel('refresh', '{{url('mmmuser/ordersofuser')}}?page='+pageNumber);
					            }">
					</div>
				</td>
				<td width="2%">&nbsp;</td>
				<td width="32%;" align="center" valign="top">

						<div class="easyui-pagination" id="assignmentsbox" style="border:1px solid #ccc;"
						        data-options="
						            total: {{ $totalassignments }},
						            pageSize: 10,
						            onSelectPage: function(pageNumber, pageSize){
						                $('#assignment').panel('refresh', '{{url('mmmuser/assignment')}}?page='+pageNumber);
						            }">
						</div>
						<div id="assignment" class="easyui-panel" style="border-style: none;"
						        data-options="href:'{{url('mmmuser/assignment')}}?page=1'">
						</div>
				</td>
			</tr>
		</table>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>


		<div id="gethelpbox" class="easyui-dialog" title="New Assignment" 
			data-options="closed:true,modal:true, buttons: [{
	                    text:'Save',
	                    iconCls:'icon-ok',
	                    handler:function(){
	                        {{-- submitForm(); --}}
	                        var data = $('#gethelpform').serialize() + '&_token=' + '{{ csrf_token() }}';
	                    	var method= 'POST';
	                    	var url = '{{url('mmmuser/assignment')}}';
	                    	var boxname = $('#gethelpbox');
	                        var result = sendRequest(url, method, data, boxname);
			                $('#assignment').panel('refresh');
	                         {{-- window.location.reload(); --}}
	                    }
	                },{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#gethelpbox').dialog('close');
	                    }
	                }]" style="width: 650px; height: 320px; padding: 10px;">
	            <form id="gethelpform" style="display: inline-block; text-align: center; margin-left: 12%;font-size: 16px; " class="easyui-form" method="post" action="{{route('mmmuser.assignment.store')}}">
	                <div style="margin: 10px">
	                    <input name="firstname" type="checkbox" class="easyui-checkbox" data-options="required:true">
	                    WARNING! By entering this you agree to the terms and conditions.
	                </div>
	                {{Form::token()}}
	                <div style="margin-bottom:20px">
	                    <input class="easyui-textbox" id="name" style="width:80%;" name="name" data-options="label:'Name:',required:true, value:'{{Auth::user()->name}}'" disabled="">
	                </div>
	                <div style="margin-bottom:20px">
	                    <input class="easyui-textbox" id="amount" style="width:80%" name="amount"  data-options="label:'Amount:',required:true,validType:'number'">
	                </div>
	                <div style="margin-bottom:20px">
	                    <input class="easyui-textbox" id="message" style="width:80%" name="message" data-options="label:'Message:',multiline:true,required:true">
	                </div>
	            </form>
	    </div>


	    <div id="puthelpbox" class="easyui-dialog" title="Put Help" data-options="closed:true,modal:true, buttons: [{
	                    text:'Save',
	                    iconCls:'icon-ok',
	                    handler:function(){
	                         $.messager.alert('Update Successful.','Your request has been sent to admin for approval. You will be informed shortly.','info');
	                         $('#puthelpbox').dialog('close');
	                    }
	                },{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#puthelpbox').dialog('close');
	                    }
	                }]" style="width: 650px; height: 280px; padding: 10px;">
		        <form id="puthelpform" style="display: inline-block; text-align: center; margin-left: 12%;font-size: 16px; " class="easyui-form" method="post" action="#">
	                <div style="margin: 10px">
	                    <input name="firstname" type="checkbox" class="easyui-checkbox" data-options="required:true">
	                    WARNING! By entering this you agree to the terms and conditions.
	                </div>
	                <div style="margin-bottom:20px">
	                    <input class="easyui-textbox" style="width:80%;" name="name" data-options="label:'Name:',required:true, value:'{{Auth::user()->name}}'" disabled="">
	                </div>
	                <div style="margin-bottom:20px">
	                    <input class="easyui-textbox" style="width:55%" name="amount"  data-options="label:'Amount:',required:true,validType:'number'">
	                    <select style="width:25%">
	                    	<option>MAVRO-USD</option>
	                    </select>
	                </div>
	            </form>
	    </div>


		<div id="OrderMessageBox" class="easyui-dialog" title="Order Message" data-options="closed:true,modal:true,buttons: [{
	                    text:'Send',
	                    iconCls:'icon-ok',
	                    handler:function(){

	                    }
	                },{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#OrderMessageBox').dialog('close');
	                    }
	                }]"
			style="width: 890px; height: 520px;">
			<div class="easyui-layout" data-options="fit:true">
				<div data-options="region:'east'" style="width: 200px; padding: 10px">
					<input type="file" name="msgFile" id="msgFile" />
				</div>
				<div data-options="region:'center'" style="overflow-y: scroll; padding: 10px;">
					<h3>Order : <b id="orderid" ></b></h3>
					<h3>You Can Communicate with this order participant.</h3>
					<h3 style="color: red"> ATTENTION!</h3>
					<p style="color: red; font-size: 12px; font-style: italic"> Please do not use any chargeback payment systems like paypal, scrill,etc!</p>
					<p style="font-size: 12px; font-style: italic">Those system allow sender to call back the transfer so that he can get the money back! Fraudsters often use this as a option!Pay attention!</p>
					<h3 style="color: red"> --==Beware Hackers!==--</h3>
					<h3 style="color: red"> If sender give a link in chat, don't click it! Think first why would he send it? May be he awants to hack your computer. If he wants to show you a screen there is a button on right side ("Browse File"), to attach the file to message.</h3>
					<div id="loadmsgbox"></div>
				</div>
				<div data-options="region:'south'" title="Write your message here" style="height: 120px; padding: 10px">
					<textarea name="messageInput" id="messageInput" style="height: 60px; width: 600px"></textarea>
				</div>
			</div>
		</div>






		<div id="OrderDetailBox" class="easyui-dialog" title="Order Details" 
			data-options="closed:true,modal:true, buttons: [{ text:'Close', iconCls:'icon-cancel', handler:function(){  $('#OrderDetailBox').dialog('close'); }}]" style="width: 810px; height: 510px; overflow-y: scroll">
			@include('users.order.details')
			<div id="orboxloadOrderHeader" style="padding: 10px; margin-bottom: 5px; width: 300px;"></div>
			<div id="orboxloadOrdermid" style="padding: 10px; margin-bottom: 5px;"></div>
			<div id="orboxloadOrder" style="padding: 10px"></div>
		</div>




		<div id="assignmentDetailbox" class="easyui-dialog" title="Order Details View" 
			data-options="closed:true,modal:true, buttons: [{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#assignmentDetailbox').dialog('close');
	                    }
	                }]"
				 style="width: 810px; height: 510px; overflow-y: scroll">
			<div id="boxloadOrderHeader" style="padding: 10px; margin-bottom: 5px; width: 300px;">
				
			</div>
			<div id="boxloadOrdermid" style="padding: 10px; margin-bottom: 5px;"></div>
			<div id="boxloadOrder" style="padding: 10px"></div>
		</div>





	    <div id="cancelOrderbox" class="easyui-dialog" title="Order Cancel" 
	    		data-options="closed:true,modal:true, buttons: [{
	                    text:'Cancel Order',
	                    iconCls:'icon-ok',
	                    handler:function(){
	                    	{{-- Return result of the ajax request --}}
	                    	var data = 'cancelreason=' + $('#CancellReasonInput').val() + '&_token=' + '{{ csrf_token() }}';
	                    	var method= 'PUT';
	                    	var url = '{{url('mmmuser/assignment/cancel')}}' +'/' + $('#assignmentid').text();
	                    	var boxname = $('#cancelOrderbox');
	                        var result = sendRequest(url, method, data, boxname);
			                $('#assignment').panel('refresh');
	                    }
	                },{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#cancelOrderbox').dialog('close');
	                    }
	                }]"
			 	style="width: 800px; height: 300px;">
					<div class="easyui-layout" data-options="fit:true">
						<div data-options="region:'center'" style="padding: 20px;">
							<div id="refname"></div>
							<p style="font-weight: bold; font-size: 15px;"><span id="oidlbl"></span></p>
							<p>
			                    <p>
			                        <b>ORDER ID: <b id="assignmentid" ></b></b>
			                    </p>
			                    <p>
			                        <b>Reason for cancellation</b>
			                    </p>
								<textarea id="CancellReasonInput" class="required"  style="width: 400px; height: 100px;"></textarea>
							</p>
						</div>
					</div>
		</div>
	</div>

@endsection


@section('scripts')
<script>
    function submitForm(){
         $('#gethelpform').form('submit',{
                onSubmit:function(){
                    return $(this).form('enableValidation').form('validate');
                }
            });
    }

    function getHelp(){
    	$('#amount').val('');
    	$('#message').val('');
    	$('#gethelpbox').dialog('open');

    }
    function clearForm(){
        $('#gethelpform').form('clear');
    }

    function cancelAss(assid){

        $('#assignmentid').text(assid);
         $('textarea#CancellReasonInput').val('');
        $('#cancelOrderbox').dialog('open');
    }

    function showDetail(assid){
    	// console.log(assid)
    	var asshtml = $('#' + assid).html();
    	console.log(asshtml);
    	$('#boxloadOrderHeader').html(asshtml);
    	$('#assignmentDetailbox').dialog('open');
    }


    
    
</script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

@endsection

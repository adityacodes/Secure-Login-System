@extends('layouts.user')


@section('title', 'Dashboard')

@section('stylesheets')
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('easyui/validationEngine.jquery.min.css')}}" /> --}}



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
					<div id="get_help" onclick="gethelptask()"  class="ordout_button">
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
						<option value="ar">Cummins HK (cummins.hk@gmail.com)</option>
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
	                        submitForm();
	                        $('.pagination-load').trigger('click');
	                        $('#gethelpbox').dialog('close');
	                    }
	                },{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#gethelpbox').dialog('close');
	                    }
	                }]" style="width: 650px; height: 280px; padding: 10px;">
			<div class="easyui-layout" id="populategethelp" fit="true">
		    	
		   </div>
	    </div>
	    <div id="puthelpbox" class="easyui-dialog" title="Put Help" data-options="closed:true, modal:true" style="width: 650px; height: 280px; padding: 10px;">
	        <form id="ff" method="post">
	            <div style="margin-bottom:20px">
	                <input type="checkbox" name="name" data-options="required:true">
	                WARNING! By entering this you agree to the terms and conditions.
	            </div>       
	        </form>
	        <div style="text-align:center;padding:5px 0">
	            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Submit</a>
	            <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">Clear</a>
	        </div>
	    </div>
		<div id="OrderMessageBox" class="easyui-dialog" title="Order Message" data-options="closed:true,modal:true" 
			style="width: 890px; height: 520px;">
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
		<div id="OrderDetailBox" class="easyui-dialog" title="Order Details" 
			data-options="closed:true,modal:true, buttons: [{ text:'Close', iconCls:'icon-cancel', handler:function(){  $('#OrderDetailBox').dialog('close'); }}]" style="width: 810px; height: 510px; overflow-y: scroll">
			<div id="boxloadOrderHeader" style="padding: 10px; margin-bottom: 5px; width: 300px;"></div>
			<div id="boxloadOrdermid" style="padding: 10px; margin-bottom: 5px;"></div>
			<div id="boxloadOrder" style="padding: 10px"></div>
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
			<div id="boxloadOrderHeader" style="padding: 10px; margin-bottom: 5px; width: 300px;"></div>
			<div id="boxloadOrdermid" style="padding: 10px; margin-bottom: 5px;"></div>
			<div id="boxloadOrder" style="padding: 10px"></div>
		</div>
	    <div id="cancelOrderbox" class="easyui-dialog" title="Order Cancel" 
	    		data-options="closed:true,modal:true, buttons: [{
	                    text:'Cancel Order',
	                    iconCls:'icon-ok',
	                    handler:function(){
	                        alert('ok');
	                    }
	                },{
	                    text:'Close',
	                    iconCls:'icon-cancel',
	                    handler:function(){
	                         $('#cancelOrderbox').dialog('close');;
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
								<textarea id="CancellReasonInput" class="required" style="width: 400px; height: 100px;"></textarea>
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
    function clearForm(){
        $('#gethelpform').form('clear');
    }

    function cancelOrder(assid){

        $('#assignmentid').text(assid);
        $('#cancelOrderbox').dialog('open');
    }

    function gethelptask(){
    	$.get( "{{url('mmmuser/assignment/create')}}", function( data ) {
		  $( "#populategethelp" ).html( data );
		});
    	$('#gethelpbox').dialog('open');
    	
    }
</script>

@endsection

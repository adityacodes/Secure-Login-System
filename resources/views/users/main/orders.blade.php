
<div id="" class="easyui-panel p" style="width:740px;height:140px;padding:10px;">
	<table style="width:100%">
		<tr>

			<td width="80%" onclick="$('#OrderDetailBox').dialog('open')">You confirmed funds reception (Request for help Z360399303)</td>
			<td><a href="#" onclick="$('#OrderMessageBox').dialog('open')" class="easyui-linkbutton">message 0/0</a></td>

		</tr>
	</table>
	<table  onclick="$('#OrderDetailBox').dialog('open')" style="width:100%">
		<tr>
			<td width="10%"><img style="height: 40px" src="{{asset('easyui/themes/icons/2.png')}}"><br>Number:R798559583</td>
			<td width="20%">Date of creating:<br>2016-12-13	</td>
			<td width="20%">Great Tobin ><br>Bitcoin </td>
			<td width="20%">20 USD<br>Confirmation: <img src="{{asset('easyui/themes/icons/file.png')}}"> </td>
			<td width="20%">Confirmation:<br>> {{Auth::user()->name}}<br>Bitcoin </td>
			<td width="10%"><img style="height: 40px" src="{{asset('easyui/themes/icons/printout.png')}}"><br><a href="#" onclick="$('#OrderDetailBox').dialog('open')" class="easyui-linkbutton">Details>></a></td>

		</tr>
	</table>
</div>
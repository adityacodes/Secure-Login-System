@extends('layouts.user')


@section('content')


	<table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="100%" valign="top">
					<div id="orders" class="easyui-panel" style="height:200px;border-style: none;"
					        data-options="href:'{{url('mmmuser/news')}}?page=1'">
					</div>
					<div class="easyui-pagination" style="border:1px solid #ccc;"
					        data-options="
					            total: {{ $totalnews }},
					            pageSize: 10,
					            onSelectPage: function(pageNumber, pageSize){
					                $('#orders').panel('refresh', '{{url('mmmuser/news')}}?page='+pageNumber);
					            }">
					</div>
				</td>
			</tr>
	</table>



@endsection

@extends('layouts.user')


@section('title', 'Mavro')


@section('stylesheets')
@endsection

@section('content')


	<div data-options="region:'center'" title="Mavro">
            <div class="easyui-layout" data-options="fit:true">
                <div data-options="region:'south',split:true" style="height:50px;">
                    <table>
                        <tr>
                            <td width="70%">Green -- available for withdrawal; Blue -- Frozen; Red -- Not Confirmed</td>
                            <td>Accumulated Guider Bonus: Unconfirmed: 250.0000 Confirmed:</td>

                        </tr>
                    </table>
                </div>
                <div data-options="region:'center'">
					<table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
				           url="datagrid_mavro.json"
				           toolbar="#toolbar" pagination="true"
				           idField="false"
				           rownumbers="true" fitColumns="true" singleSelect="true">
				        <thead>
				        <tr>
				            <th data-options="field:'id'" width="80">ID</th>
				            <th data-options="field:'type'" width="100">Type</th>
				            <th data-options="field:'doc'" width="150">Date Of Creating</th>
				            <th data-options="field:'releasedate'" width="150">Release Date</th>
				            <th data-options="field:'initialpayment'" width="150">Initial Payment</th>
				            <th data-options="field:'wallet'" width="150">Wallet</th>
				            <th data-options="field:'description'" width="150">Description</th>
				            <th data-options="field:'oncurrentdate',align:'center'" width="150">On Current Date</th>
				            <th data-options="field:'onreleasedate'" width="150">On Release Date</th>
				            <th data-options="field:'future'" width="150">Future</th>
				            <th data-options="field:'comment'" width="150">Comment</th>
				        </tr>
				        </thead>
				    </table>
				</div>
			</div>
	</div>



@endsection

@section('scripts')
	



@endsection
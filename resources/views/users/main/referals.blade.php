@extends('layouts.user')

@section('title', 'Referral')

@section('stylesheets')
    <style>
        table{
            font-size: 14px;
            background-color: #FFFFFF;
        }
        .panel-body{
            padding: 0px;
        }
        .panel-header{
            font-size: 14px;
            padding: 6px;
        }
        .panel-footer{
            font-size: 12px;
            background-color: #FEF8E4;
        }
        .footer{
            bottom: 0px;
            padding: 0px;
        }
    </style>
@endsection

@section('content')
    <div id="p" class="easyui-panel" title="Participants" style="width:100%;height:100%;padding:10px;">
        <table class="easyui-datagrid"
                data-options="url:'datagrid_data1.json',method:'get',border:false,singleSelect:true,fit:true,fitColumns:true" pagination="true">
            <thead>
            <tr>
                <th></th>
                <th data-options="field:'itemid'" width="150">Participants</th>
                <th data-options="field:'productid'" width="120">First name</th>
                <th data-options="field:'listprice',align:'right'" width="180">Last Name</th>
                <th data-options="field:'attr1'" width="150">Guider</th>
                <th data-options="field:'attr1'" width="150">City</th>
                <th data-options="field:'attr1'" width="150">Mobile</th>
                <th data-options="field:'status',align:'center'" width="60">Status</th>
                <th data-options="field:'attr1'" width="150">Registration Date</th>
            </tr>
            </thead>
        </table>
    </div>

@endsection

@section('scripts')

@endsection
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
    <div class="panel panel-default">
        <div class="panel-header ph">
            Participants
        </div>
        <div class=" panel-body ">
             <table class="easyui-datagrid" title="Basic DataGrid" style="width:700px;height:250px"
            data-options="singleSelect:true,collapsible:true,url:'datagrid_data1.json',method:'get'">
                <thead>
                    <tr>
                        <th data-options="field:'itemid',width:80">Item ID</th>
                        <th data-options="field:'productid',width:100">Product</th>
                        <th data-options="field:'listprice',width:80,align:'right'">List Price</th>
                        <th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>
                        <th data-options="field:'attr1',width:250">Attribute</th>
                        <th data-options="field:'status',width:60,align:'center'">Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>




@endsection

@section('scripts')

@endsection
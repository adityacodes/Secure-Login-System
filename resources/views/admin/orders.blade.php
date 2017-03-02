@extends('layouts.admin')

@section('title','Orders')




@section('stylesheets')


@endsection



@section('content')
    <div data-options="region:'center',title:'Accounts'"  >
        <div class="easyui-layout" data-options="fit:true">
            {{Form::token()}}
            <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                   url="{{ url('mmmuser/orders') }}" method="get"
                   toolbar="#toolbar" pagination="true"
                   rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                <tr>
                    <th field="assignmentid" width="50">Assignment ID</th>
                    <th field="orderid" width="50">Order ID</th>
                    <th field="rptname" width="50">Recipient Name</th>
                    <th field="amount" width="50">Amount</th>
                    <th field="snrname" width="50">Sender Name</th>
                    <th field="msg" width="100">Message </th>
                    <th field="created_at" width="50">Created At </th>
                    <th field="status" width="50">Status</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

@endsection



@section('scripts')


@endsection
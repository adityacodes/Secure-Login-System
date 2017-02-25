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

<div id="cc" class="easyui-layout" style="width:100%;height:645px;margin-top: +10px">

      <div data-options="region:'center',title:'Accounts'"  >
        <div class="easyui-layout" data-options="fit:true">

            <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                url="{{ url('user/participants') }}" method="get"
                toolbar="#toolbar" pagination="true" 
                rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                    <tr>
                        <th field="ac_id" width="50">Participants</th>
                        <th field="ac_name" width="50">First Name</th>
                        <th field="ac_currency" width="50">Last Name</th>
                        <th field="bank_name" width="50">Guider</th>
                        <th field="ac_number" width="100">City</th>
                        <th field="ac_holder" width="50">Mobile</th>
                        <th field="created_at" width="50">Status</th>
                        <th field="details" width="50">Registration Date</th>
                    </tr>
                </thead>
            </table>

        </div>
       </div> 



</div>

@endsection

@section('scripts')

@endsection
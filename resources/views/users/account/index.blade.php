@extends('layouts.user')


@section('title', 'My Accounts')

@section('stylesheets')

    <link rel="stylesheet" href="{{asset('easyui/validationEngine.jquery.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/wizard.css')}}" />
    
@endsection

@section('content')
<div id="cc" class="easyui-layout" style="width:100%;height:645px; margin-top: +10px">

    <div id="addacc" data-options="region:'east',split:true,collapsed:true" title="Account" style="width:450px; padding: 20px;">
        <form id="accform" method="POST" action="{{url('mmmuser/account')}}">
            <fieldset class="wfieldset">
                <label for="Name">Bitcoin Address</label>
                <input id="Name" name="ac_number" type="text" class="validate[required]" />
            </fieldset>
            <fieldset class="wfieldset">
                <label for="ac_name">Account Name :</label>
                <input id="ac_name" type="text" name="ac_name" class="validate[required]" />
                <label for="bank_name">Bank Name :</label>
                <input id="bank_name" type="text" name="bank_name" disabled="" value="Bitcoin" />

            </fieldset>
            <fieldset class="wfieldset">
                <label for="ac_holder">Account Holder :</label>
                <input id="ac_holder" type="text" name="ac_holder" class="validate[required]" />
                <label for="ac_type">Account Type :</label>
                <input id="ac_type" disabled="" type="text" name="ac_type" />
                <label for="ac_currency">Account Currency</label>
                <select id="ac_currency" name="ac_currency">
                    <option value="MAVRO-USD">MAVRO-USD</option>
                </select>     
                <label for="beneficiary_name">Beneficiary Name :</label>
                <input id="beneficiary_name" class="validate[required]" type="text" name="beneficiary_name" />
                {{Form::token()}}
            </fieldset>
            <p>
                <input id="SaveAccount" onclick="saveUser()" type="button" value="Save Account" />
            </p>
        </form>
    </div>
    <div data-options="region:'center',title:'Accounts'"  >
        <div class="easyui-layout" data-options="fit:true">

            <div id="toolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Add</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true"  onclick="removeUser()">Delete</a>
            </div>
            {{Form::token()}}
            <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                url="{{ url('mmmuser/accounts') }}" method="get"
                toolbar="#toolbar" pagination="true" 
                rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                    <tr>
                        <th field="id" width="10" hidden="">ID</th>
                        <th field="ac_id" width="50">ID</th>
                        <th field="ac_name" width="50">Account Name</th>
                        <th field="ac_currency" width="50">Currency Code</th>
                        <th field="bank_name" width="50">Bank</th>
                        <th field="ac_number" width="100">Card/Account Number </th>
                        <th field="ac_holder" width="50">Card/Account Holder </th>
                        <th field="created_at" width="50">Created At </th>
                        <th field="beneficiary_name" width="50">Details</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection



@section('scripts')


<script src="{{asset('easyui/jquery.validationEngine.min.js') }}"></script>
<script src="{{asset('easyui/jquery.validationEngine-en.min.js')}}"></script>
<script type="text/javascript">
    var serverurl='{{url('mmmuser/account')}}';
    var token = '{{ csrf_token() }}';
</script>
<script type="text/javascript" src="{{asset('js/accontrollers.js')}}"></script>

@endsection
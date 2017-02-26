@extends('layouts.user')


@section('title', 'My Accounts')

@section('stylesheets')

    <style>
        #header { text-align:center; border-bottom:solid 1px #b2b3b5; margin: 0 0 20px 0; }
        fieldset { border:none; width:320px;}
        legend { font-size:18px; margin:0px; padding:10px 0px; color:#b0232a; font-weight:bold;}
        label { display:block; margin:15px 0 5px;}
        input[type=text], input[type=password] { width:300px; padding:5px; border:solid 1px #000;}
        
        button, .prev, .next { background-color:#b0232a; padding:5px 10px; color:#fff; text-decoration:none;}
        button:hover, .prev:hover, .next:hover { background-color:#000; text-decoration:none;}

        button { border: none; }

        #controls { background: #eee; box-shadow: 0 0 16px #999; height: 30px; position: fixed; padding: 10px; top: 0; left: 0; width: 100%; z-index: 1 }
        #controls h1 { color: #666; display: inline-block; margin: 0 0 8px 0 }
        #controls input[type=text] { border-color: #999; margin: 0 25px; width: 120px }
        
        #steps { margin: 80px 0 0 0 }
    </style>
    
    <link rel="stylesheet" href="{{asset('easyui/validationEngine.jquery.min.css')}}" />
    <style>
        .prev{float:left}
        .next{float:right}
        .steps{list-style:none;width:100%;overflow:hidden;margin:0;padding:0}
        .steps li{color:#b0b1b3;font-size:24px;float:left;padding:10px;transition:all .3s;-moz-transition:all .3s;-webkit-transition:all .3s;-o-transition:all .3s}
        .steps li span{font-size:11px;display:block}
        .steps li.current{color:#000}
        .breadcrumb{height:37px}
        .breadcrumb li{background:#eee;font-size:14px}
        .breadcrumb li.current:after{border-top:18px solid transparent;border-bottom:18px solid transparent;border-left:6px solid #666;content:' ';position:absolute;top:0;right:-6px}
        .breadcrumb li.current{background:#666;color:#eee;position:relative}
        .breadcrumb li:last-child:after{border:none}
    </style>


@endsection


@section('content')
<div id="cc" class="easyui-layout" style="width:100%;height:645px; margin-top: +10px">

    <div id="addacc" data-options="region:'east',split:true,collapsed:true" title="Account" style="width:450px; padding: 20px;">
        

        <form id="accform" method="POST" action="{{url('mmmuser/account')}}">
        <fieldset>
            <label for="Name">Bitcoin Address</label>
            <input id="Name" name="ac_number" type="text" class="validate[required]" />
        </fieldset>
        <fieldset>
            <label for="ac_name">Account Name :</label>
            <input id="ac_name" type="text" name="ac_name" class="validate[required]" />
            <label for="bank_name">Bank Name :</label>
            <input id="bank_name" type="text" name="bank_name" disabled="" value="Bitcoin" />

        </fieldset>
        <fieldset>
            <label for="ac_holder">Account Holder :</label>
            <input id="ac_holder" type="text" name="ac_holder" class="validate[required]" />
            <label for="ac_type">Account Type :</label>
            <input id="ac_type" disabled="" type="text" name="ac_type" />
            <label for="ac_currency">Account Currency</label>
            <select id="ac_currency" name="ac_currency">
                <option value="MAVRO-USD">MAVRO-USD</option>
            </select>     
            <label for="beneficiary_name">Beneficiary Name :</label>
            <input id="beneficiary_name" type="text" name="beneficiary_name" />
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
    {{-- <div>
        <div id="w" class="easyui-dialog" title="Warning" data-options="modal:true,closed:true" style="width:500px;height:200px;padding:10px;">
            Are you sure, you Want to delete this?
        </div>
    </div> --}}



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
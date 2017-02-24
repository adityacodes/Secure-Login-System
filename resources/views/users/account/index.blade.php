@extends('layouts.user')


@section('title', 'My Accounts')

@section('stylesheets')





@endsection


@section('content')
    <div id="cc" class="easyui-layout" style="width:100%;height:625px;">

        {{-- <div data-options="region:'south',split:true" style="height:50px;"></div> --}}
        <div data-options="region:'east',split:true" title="Account" style="width:450px; padding: 20px;">
            <p>Enter your Bitcoin address</p>
            <form id="ff" method="post">
                <div style="margin-bottom:20px">
                    <input class="easyui-textbox" name="name" style="width:450px" data-options="label:'Bitcoin Address',required:true">
                </div>
            </form>
            <a href="javascript:void(0)" iconcls="icon-ok" style="padding: 3px" class="easyui-linkbutton" onclick="submitForm()">Save</a>
            <a href="javascript:void(0)" iconcls="icon-cancel" style="padding: 3px" class="easyui-linkbutton" onclick="submitForm()">Cancel</a>

        </div>
        <div data-options="region:'center',title:'Accounts'" >
            <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                   url="g"
                   toolbar="#toolbar" pagination="true"
                   rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                <tr>
                    <th field="id" width="50">ID</th>
                    <th field="firstname" width="50">First Name</th>
                    <th field="currencycode" width="50">Currency Code</th>
                    <th field="bank" width="50">Bank</th>
                    <th field="accntno" width="50">Card/Account Number </th>
                    <th field="details" width="50">Details</th>
                </tr>
                </thead>
            </table>
            <div id="toolbar">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Addr</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Delete</a>
            </div>

            <div id="dlg" class="easyui-dialog" style="width:400px"
                 closed="true" buttons="#dlg-buttons">
                <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
                    <div style="margin-bottom:20px;font-size:14px;border-bottom:1px solid #ccc">User Information</div>
                    <div style="margin-bottom:10px">
                        <input name="firstname" class="easyui-textbox" required="true" label="First Name:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="lastname" class="easyui-textbox" required="true" label="Last Name:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="phone" class="easyui-textbox" required="true" label="Phone:" style="width:100%">
                    </div>
                    <div style="margin-bottom:10px">
                        <input name="email" class="easyui-textbox" required="true" validType="email" label="Email:" style="width:100%">
                    </div>
                </form>
            </div>
            {{-- <div id="dlg-buttons">
                <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
            </div> --}}
        </div>
    </div>



@endsection



@section('scripts')




@endsection
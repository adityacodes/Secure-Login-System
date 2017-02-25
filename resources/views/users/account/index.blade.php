@extends('layouts.user')


@section('title', 'My Accounts')

@section('stylesheets')





@endsection


@section('content')
    <div id="cc" class="easyui-layout" style="width:100%;height:625px;">

        <div id="addacc" data-options="region:'east',split:true,collapsed:true" title="Account" style="width:450px; padding: 20px;">
            <p>Enter your Bitcoin address</p>
            <form id="ff" method="post">
                <div style="margin-bottom:20px">
                    <input class="easyui-textbox" name="name" style="width:300px" data-options="label:'Bitcoin Address',required:true">
                </div>
            </form>
            <a href="#" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-ok'">Save</a>
            <a href="#" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-cancel'" onclick="javascript:$('#cc').layout('collapse','east');   $('#fm').form('clear');">Cancel</a>
        </div>
        <div data-options="region:'center',title:'Accounts'"  >
            <div class="easyui-layout" data-options="fit:true">

                    <div id="toolbar">
                        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Add</a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit</a>
                        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Delete</a>
                    </div>
                    <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                           url="datagrid_accounts.json"
                           toolbar="#toolbar" pagination="true"
                           rownumbers="true" fitColumns="true" singleSelect="true">
                        <thead>
                        <tr>
                            <th field="accountid" width="50">ID</th>
                            <th field="firstname" width="50">First Name</th>
                            <th field="currencycode" width="50">Currency Code</th>
                            <th field="bank" width="50">Bank</th>
                            <th field="accntno" width="50">Card/Account Number </th>
                            <th field="details" width="50">Details</th>
                        </tr>
                        </thead>
                    </table>
                    

            </div>
        </div>
    </div>



@endsection



@section('scripts')

<script type="text/javascript">
    var url;
    $('#cc').layout();
    function newUser() {
   
        $('#fm').form('clear');
        
        $('#cc').layout('expand', 'east');
    }
    function editUser() {
        var row = $('#dg').datagrid('getSelected');
        $('#cc').layout('expand', 'east');
        if (row) {
            $('#dlg').dialog('open').dialog('setTitle', 'Edit User');
            $('#fm').form('load', row);
            url = '/united/handler/banking/update_account.ashx?id=' + row.Id;
        }
    }

    function saveUser() {
        $('#fm').form('submit', {
            url: url,
            onSubmit: function () {
                return $(this).form('validate');
            },
            success: function (result) {
                var result = eval('(' + result + ')');

                if (result.Success) {
                    $('#cc').layout('collapse', 'east');  // close the dialog
                    $('#dg').datagrid('reload'); // reload the user data
                } else {
                    $.messager.show({
                        title: 'Error',
                        msg: result.Message
                    });
                }
            }
        });
    }
    function removeUser() {
        var row = $('#dg').datagrid('getSelected');
        if (row) {
            $.messager.confirm('Confirm', 'Are you sure you want to cancel this transaction??', function (r) {
                if (r) {
                    $.post('/united/handler/banking/remove.ashx', { id: row.Id }, function (result) {
                        if (result.Success) {
                            $('#dg').datagrid('reload'); // reload the user data
                        } else {
                            $.messager.alert({  // show error message
                                title: 'Error',
                                msg: result.Message

                            });
                        }
                    }, 'json');
                }
            });
        }
    }

</script>


@endsection
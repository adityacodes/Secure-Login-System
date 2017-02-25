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
        

        <form id="SignupForm" action="">
        <fieldset>
            <label for="Name">Bitcoin Address</label>
            <input id="Name" type="text" class="validate[required]" />
        </fieldset>
        <fieldset>
            <label for="CompanyName">Company Name</label>
            <input id="CompanyName" type="text" class="validate[required]" />
            <label for="Website">Website</label>
            <input id="Website" type="text" />
            <label for="CompanyEmail">CompanyEmail</label>
            <input id="CompanyEmail" type="text" />
        </fieldset>
        <fieldset>
            <label for="NameOnCard">Name on Card</label>
            <input id="NameOnCard" type="text" />
            <label for="CardNumber">Card Number</label>
            <input id="CardNumber" type="text" />
            <label for="CreditcardMonth">Expiration</label>
            <select id="CreditcardMonth">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <select id="CreditcardYear">
                <option value="2009">2009</option>
                <option value="2010">2010</option>
            </select>        
            <label for="Address1">Address 1</label>
            <input id="Address1" type="text" />
            <label for="Address2">Address 2</label>
            <input id="Address2" type="text" />
            <label for="City">City</label>
            <input id="City" type="text" />
            <label for="City">City</label>
            <select id="Country">
                <option value="IN">India</option>
            </select>
        </fieldset>
        <p>
            <input id="SaveAccount" type="button" value="Submit form" />
        </p>
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
            {{Form::token()}}
            <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                url="{{ url('user/accounts') }}" method="get"
                toolbar="#toolbar" pagination="true" 
                rownumbers="true" fitColumns="true" singleSelect="true">
                <thead>
                    <tr>
                        <th field="ac_id" width="50">ID</th>
                        <th field="ac_name" width="50">First Name</th>
                        <th field="ac_currency" width="50">Currency Code</th>
                        <th field="bank_name" width="50">Bank</th>
                        <th field="ac_number" width="100">Card/Account Number </th>
                        <th field="ac_holder" width="50">Card/Account Holder </th>
                        <th field="created_at" width="50">Created At </th>
                        <th field="details" width="50">Details</th>
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


     $( function() {
            var $signupForm = $( '#SignupForm' );
            
            $signupForm.validationEngine();
            
            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                showProgress: false, //default value for showProgress is also true
                nextBtnName: 'Next >>',
                prevBtnName: '<< Previous',
                showStepNo: false,
                validateBeforeNext: function() {
                     return $signupForm.validationEngine( 'validate' );
                }
            });
            
            
            $( '#txt_stepNo' ).change( function() {
                $signupForm.formToWizard( 'GotoStep', $( this ).val() );
            });
            
            $( '#btn_next' ).click( function() {
                $signupForm.formToWizard( 'NextStep' );
            });
            
            $( '#btn_prev' ).click( function() {
                $signupForm.formToWizard( 'PreviousStep' );
            });
        });
  


  // Here my cntext starts

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
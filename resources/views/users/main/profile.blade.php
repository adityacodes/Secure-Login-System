@extends('layouts.user')

@section('title', 'My Profile')

@section('content')

<div id="cc" class="easyui-layout" style="width:100%;min-height:600px;">

    </div>
    <div data-options="region:'east',split:true" title="Personal Settings" style="width: 550px; padding: 0px;">
        <div class="easyui-accordion" style="height:300px;">
            <div title="Settings" data-options="iconCls:'icon-reload'" style="overflow:auto;padding:0px; height: 50px;">
                <div style="padding-top: 20px; padding-bottom: 20px;" class="datagrid-body">
                    <table class="datagrid-btable settabel" style="width: 100%;">
                        <tbody>
                    <form id="infoform">
                        <tr class="datagrid-row">
                            <td class="translate" align="right">Time Zone</td>
                            <td align="left">
                                <select class="easyui-combobox" style="width: 180px">
                                    <option value="+5:30" selected="selected" title="GMT +5:30">GMT +5:30</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">Language</td>
                            <td align="left">
                                <select class="easyui-combobox" style="width: 180px">
                                    <option value="ENG" selected="selected" title="Language">English
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">Currency</td>
                            <td align="left">
                                <select class="easyui-combobox" style="width: 180px">
                                    <option value="USD" selected="selected" title="Language">USD</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input @if(Auth::user()->receive_mails)
                                        checked=""
                                        @endif
                                          type="checkbox" name="receive_mails" />
                            </td>
                            <td align="left">Recieve e-mails from the system
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input @if(Auth::user()->send_sms)
                                        checked=""
                                        @endif type="checkbox" name="send_sms" />
                            </td>
                            <td align="left">Send extended SMS messages
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input @if(Auth::user()->show_nick)
                                        checked=""
                                        @endif
                                         type="checkbox" name="show_nick" />
                            </td>
                            <td align="left">Show nickname instead of full name
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input @if(Auth::user()->show_email_public)
                                        checked=""
                                        @endif
                                         type="checkbox" name="show_email_public" />
                            </td>
                            <td align="left">Show E-mail in public profile
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align: center">
                                <a href="javascript:void(0)" iconcls="icon-save" class="easyui-linkbutton" onclick="saveInfo()">Save</a>
                            </td>
                        </tr>
                    </form>
                        </tbody>
                    </table>
                </div>
            </div>
            <div title="Referrer" data-options="iconCls:'icon-ok'" style="overflow:auto;padding:20px;">
                    <h3 style="color:#0099FF;">koyamatakahiro@yahoo.com</h3>
                    <p>My saved referal</p>
                    <a href="#">Show my referral link</a>
            </div>
        </div>
    </div>
    <div data-options="region:'center',title:'Personal information'" style="width:100%; height: 100%;">

        <table id="pg" class="easyui-propertygrid" style="width:100%" data-options="
                url:'{{ url('mmmuser/getprofile') }}',
                method:'get',
                showGroup:true,
                scrollbarSize:0
            ">
        </table>
    </div>
    <div data-options="region:'south',split:true" style="height:50px;padding: 10px;">
        <a href="javascript:void(0)" iconcls="icon-ok" class="easyui-linkbutton" onclick="getChanges()">Save</a>
        <a href="javascript:void(0)" iconcls="icon-cancel" class="easyui-linkbutton" onclick="submitForm()">Cancel</a>
    </div>
</div>


@endsection



@section('scripts')
 <script type="text/javascript">
    function getChanges() {
        var s = '';
        var rows = $('#pg').propertygrid('getChanges');
        if (rows.length > 0) {
            var user = {};
            var AllRows = $('#pg').propertygrid('getRows');
            console.log(AllRows)
            user.FirstName = AllRows[0].value;
            user.LastName = AllRows[1].value;
            user.Mobile = AllRows[3].value;
            user.Country = AllRows[4].value;
            user.Region = AllRows[5].value;
            user.City = AllRows[6].value;
            user.DOB = AllRows[8].value;
            user.Skype = AllRows[9].value;
            user.Yahoo = AllRows[10].value;
            user.Website = AllRows[11].value;
            user.Facebook = AllRows[12].value;
            user.Google = AllRows[13].value;
            user.Twitter = AllRows[14].value;
            user.Information = AllRows[15].value;
            user.Contacts = AllRows[16].value;
            saveChanges(user)
        }

    }

    function saveChanges(user) {
        // var profile = JSON.stringify(user);
        var obj;
        $.ajax({
            type: "POST",
            url: "{{'mmmuser/saveprofile'}}",
            data: 'firstname=' + user.FirstName +
                    '&_token=' + '{{ csrf_token() }}' +
                    '&lastname=' + user.LastName +
                    '&mobile='+ user.Mobile +
                    '&dob='+ user.DOB +
                    '&country='+ user.Country +
                    '&region='+ user.Region +
                    '&city='+ user.City +
                    '&skype='+ user.Skype +
                    '&twitter='+ user.Twitter +
                    '&website='+ user.Website +
                    '&facebook='+ user.Facebook +
                    '&google='+ user.Google +
                    '&information='+ user.Information +
                    '&contacts='+ user.Contacts,
            success: function (result) {
                obj = JSON.parse(result);
                if(obj.Success)
                {
                    $.messager.alert('User Information',obj.Message,'info');
                }
                
            },
            error: function (e) { 
                $.messager.show({   // show error message
                    title: 'Error',
                    msg: e.responseText

                }); 
            }
        });
    }

    function saveInfo() {
        var url = '{{url('mmmuser/saveProfieInfo')}}';
        var method = "POST";
        var token = '{{csrf_token()}}';
        // console.log($('#infoform').serialize())
        $.ajax({
            url: url,
            type: method,
            data:  $('#infoform').serialize() + "&_token=" + token, 
            success: function(result){
                    var obj = JSON.parse(result);
                    if(obj.Success)
                    {
                        $.messager.alert('Saved Successfully',obj.Message,'info');
                    }
                },
            error: function(data,result){
                $.messager.alert({  // show error message
                    title: 'Error',
                    msg: 'Please try again.'

                });
            }
        });
    }
</script>

@endsection

@extends('layouts.user')

@section('title', 'My Profile')

@section('stylesheets')




@endsection


@section('content')

<div id="cc" class="easyui-layout" style="width:100%;min-height:600px;">

    </div>
    <div data-options="region:'east',split:true" title="Personal Settings" style="width: 600px; padding: 0px;">
        <div class="easyui-accordion" style="height:300px;">
            <div title="Settings" data-options="iconCls:'icon-reload'" style="overflow:auto;padding:0px; height: 50px;">
                <div style="padding-top: 20px; padding-bottom: 20px;" class="datagrid-body">
                    <table class="datagrid-btable settabel" style="width: 100%;">
                        <tbody>
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
                                    <option value="RUS" title="Language">Russian
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
                                <input checked="checked" type="checkbox" />
                            </td>
                            <td align="left">Recieve e-mails from the system
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input checked="checked" type="checkbox" />
                            </td>
                            <td align="left">Send extended SMS messages
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input type="checkbox" />
                            </td>
                            <td align="left">Show nickname instead of full name
                            </td>
                        </tr>
                        <tr>
                            <td class="translate" align="right">
                                <input checked="checked" type="checkbox" />
                            </td>
                            <td align="left">Show E-mail in public profile
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="text-align: center">
                                <a href="javascript:void(0)" iconcls="icon-save" class="easyui-linkbutton" onclick="submitForm()">Save</a>
                            </td>
                        </tr>
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
                url:'datagrid_profile.json',
                method:'get',
                showGroup:true,
                scrollbarSize:0
            ">
        </table>
    </div>
    <div data-options="region:'south',split:true" style="height:50px;padding: 10px;">
        <a href="javascript:void(0)" iconcls="icon-ok" class="easyui-linkbutton" onclick="submitForm()">Save</a>
        <a href="javascript:void(0)" iconcls="icon-cancel" class="easyui-linkbutton" onclick="submitForm()">Cancel</a>
    </div>
</div>


@endsection



@section('scripts')
 

@endsection

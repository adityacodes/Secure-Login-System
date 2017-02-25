@extends('layouts.user')

@section('title', 'My Profile')

@section('stylesheets')




@endsection


@section('content')
<div id="cc" class="easyui-layout" style="width:100%;min-height:600px;">

    <div data-options="region:'south',split:true" style="height:50px;">
        <a href="#" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-ok'">Save</a>
        <a href="#" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-cancel'">Cancel</a>
    </div>
    <div data-options="region:'east',split:true" title="Personal Settings" style="width: 600px; padding: 0px;">
        <div class="easyui-accordion" style="width:580px;height:300px;">
            <div title="Settings" data-options="iconCls:'icon-reload'" style="overflow:auto;padding:0px;">
                <div style="padding-top: 20px; padding-bottom: 20px;" class="datagrid-body">
                    <table class="datagrid-btable settabel" style="width: 390px;">
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
            <div title="Referrer" data-options="iconCls:'icon-ok'" style="overflow:auto;padding:0px;">
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
</div>


@endsection



@section('scripts')
 {{--   <script src="{{asset('js/bootstrap-editable.min.js')}}"></script>

    <script>
        
        $(document).ready(function() {
                var panel = $('#slide-panel');
                panel.addClass('visible').animate({'margin-left':'0px'});
                $('#content').css({'margin-right':'-500px'});
                
            });
        $(document).ready(function(){
            
            $('#opener,#add,#edit').click(function() {
                var panel = $('#slide-panel');
                if (panel.hasClass("visible")) {
                    panel.removeClass('visible').animate({'margin-left':'-500px'});
                    $('#content').css({'margin-right':'0px'});
                } else {panel.addClass('visible').animate({'margin-left':'0px'});
                    $('#content').css({'margin-right':'-500px'});
                }
                return false;
            });
        });
        $(function () {
            $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse');
            $('.tree li.parent_li > span').on('click', function (e) {
                var children = $(this).parent('li.parent_li').find(' > ul > li');
                if (children.is(":visible")) {
                    children.hide('fast');
                    $(this).attr('title', 'Expand').find(' > i').addClass('fa-plus').removeClass('fa-minus');
                } else {
                    children.show('fast');
                    $(this).attr('title', 'Collapse').find(' > i').addClass('fa-minus').removeClass('fa-plus');
                }
                e.stopPropagation();
            });

        });
        $.fn.editable.defaults.mode = 'inline';
        $('.name').editable({
            type: 'text',
            pk: 1,
            url: '/post',
            title: 'Enter username'

        });
        $('#dt').editable();

    </script>--}}

@endsection

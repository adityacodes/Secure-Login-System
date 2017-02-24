@extends('layouts.user')

@section('title', 'My Profile')

@section('stylesheets')




@endsection


@section('content')
{{--    <div id="slide-panel">
       <a href="#" class="btn btn-danger opener" id="opener">
           <i class="glyphicon glyphicon-align-justify"></i>
       </a>
       <div id="panels" class="panel panel-default panel2">
           <div class="ph border panel-body ">
               <h5>Personal settings </h5>

           </div>
           <div class="panel-body">
               <div class="panel panel-default " >
                   <div class="border panel-heading ph1" data-toggle="collapse" data-target="#demo">
                       Settings
                   </div>
                   <div id="demo" class="panel-footer">
                       <table class="table table-hover table-bordered">
                           <tr>
                               <td>
                                   Time Zone
                               </td>
                               <td>
                                   FirstName
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Language
                               </td>
                               <td>
                                   FirstName
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   Currency
                               </td>
                               <td>
                                   FirstName
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" aria-label="...">
                               </td>
                               <td>
                                   Recieve e-mails from the system
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" aria-label="...">
                               </td>
                               <td>
                                   Send extended SMS messages
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" aria-label="...">
                               </td>
                               <td>
                                   Show nickname instead of full name
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="checkbox" aria-label="...">
                               </td>
                               <td>
                                   Show E-mail in public profile
                               </td>
                           </tr>

                           <tr>
                               <td>

                               </td>
                               <td>
                                   <button type="button" class="btn btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                       Save</button>
                               </td>
                           </tr>


                       </table>
                   </div>
               </div>
               <div class="panel panel-default" >
                   <div class="border panel-heading ph1" data-toggle="collapse" data-target="#demor">
                       Referrer
                   </div>
                   <div id="demor" class="panel-footer">

                       <p>My saved referal
                           koyamatakahiro@yahoo.com</p><br><br><br>

                       <a href="#">Show my referral link</a>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <article id="content">
       <div class="panel panel-default panel1">
           <div class="panel-body ph">
               <h5>Personal information</h5>
           </div>
           <div class="panel-footer col-md-8">
               <div class="tree">
                   <ul>
                       <li>
                           <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>
                               General Information(double mouse click on the name, then enter the data and then 'Save' in the left side)
                           </span>
                           <ul>
                               <li>
                                   <table class="table table-hover table-bordered">
                                       <tr>
                                           <td class="col-xs-3">First Name</td>
                                           <td><a href="#" class="name">{{ explode(' ', Auth::user()->name)[0] }}</a></td>
                                       </tr>
                                       <tr>
                                           <td class="col-xs-3">
                                               Last Name
                                           </td>
                                           <td>
                                               {{ explode(' ', Auth::user()->name)[1] }}</a>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="col-xs-3">
                                               Status
                                           </td>
                                           <td>
                                               ACTIVE
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="col-xs-3">
                                               Mobile
                                           </td>
                                           <td>
                                               {{Auth::user()->mobile}}
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="col-xs-3">
                                               Email
                                           </td>
                                           <td>
                                               {{Auth::user()->email}}
                                           </td>
                                       </tr>
                                       <tr>
                                           <td class="col-xs-3">
                                               DOB
                                           </td>
                                           <td>
                                               {{Auth::user()->dob}}
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>
                                               Registration Details
                                           </td>
                                           <td>
                                               <a href="#" id="dt" data-type="datetimepicker" data-pk="1" data-url="/post" data-title="Enter username"></a>
                                           </td>
                                       </tr>
                                      
                                        
                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Region</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td class="col-xs-3">Country</td>
                                            <td colspan="2"><a href="#" class="name">{{Auth::user()->country}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">Region</td>
                                            <td colspan="2">{{Auth::user()->region}}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">City</td>
                                            <td colspan="2">{{Auth::user()->city}}</td>
                                        </tr>


                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Contact</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td class="col-xs-3">
                                                Skype
                                            </td>
                                            <td>
                                                <a href="#" class="name">{{Auth::user()->skype}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Twitter
                                            </td>
                                            <td>
                                                <a href="#" class="name">{{Auth::user()->twitter}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Website
                                            </td>
                                            <td>
                                                <a href="#" id="username" data-type="text" data-pk="1" data-url="/post" data-title="Enter username">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Facebook
                                            </td>
                                            <td>
                                                <a href="#" class="name">{{Auth::user()->facebook}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Google
                                            </td>
                                            <td>
                                                <a href="#" class="name">{{Auth::user()->google}}</a>
                                            </td>
                                        </tr>


                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    {{-- <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Personal Information</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td>
                                                Personalinfo
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Contacts
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>


                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Your Guider</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td class="col-xs-3">
                                                Name
                                            </td>
                                            <td>
                                                <a href="#" class="name"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Status
                                            </td>
                                            <td>
                                                <a href="#" class="name"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Email
                                            </td>
                                            <td>
                                                <a href="#" class="name"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Cell Number
                                            </td>
                                            <td>
                                                <a href="#" class="name"></a>
                                            </td>
                                        </tr>


                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Your Guider's Guider</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td class="col-xs-3">
                                                Name
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Status
                                            </td>
                                            <td>
                                                Cell Number
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Email
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-3">
                                                Cell Number
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>


                                    </table>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>






    </div>--}}
<div id="cc" class="easyui-layout" style="width:100%;min-height:600px;">

    <div data-options="region:'south',split:true" style="height:50px; padding: 10px">
        <a href="javascript:void(0)" iconcls="icon-ok" style="padding: 3px" class="easyui-linkbutton" onclick="submitForm()">Save</a>
        <a href="javascript:void(0)" iconcls="icon-cancel" style="padding: 3px" class="easyui-linkbutton" onclick="submitForm()">Cancel</a>

    </div>
    <div data-options="region:'east',split:true" title="Personal Settings" style="width: 600px; padding: 0px;">
        <div class="easyui-accordion" style="width:100%;height:100%;">
            <div title="Settings" data-options="iconCls:'icon-reload'" style="overflow:auto;padding:0px;">
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
            <div title="Referrer" data-options="iconCls:'icon-ok'" style="overflow:auto;padding:0px;">
                    <h3 style="color:#0099FF;">koyamatakahiro@yahoo.com</h3>
                    <p>My saved referal</p>
                    <a href="#">Show my referral link</a>
            </div>
        </div>
    </div>
    <div data-options="region:'center',title:'Personal information'" style="width:100%; height: 100%;">

        <table id="pg" class="easyui-propertygrid" style="width:100%" data-options="
                url:'propertygrid_data1.json',
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
                    children.sho



















                    w('fast');
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

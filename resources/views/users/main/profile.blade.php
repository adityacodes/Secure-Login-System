@extends('layouts.user')

@section('title', 'My Profile')

@section('stylesheets')

<style>
    .ph1{
        -webkit-transition: ease-in-out; /* Safari */
        /* Safari*/
        transition: ease-in-out;
     }
    .border{
        border-width: 2px;
        border-color: #2b2b2b;
    }
    .editable-click, 
    a.editable-click, 
    a.editable-click:hover {
        text-decoration: none;
        border-bottom: none !important;
    }
    ul, li{
        list-style-type: none;
    }
    ..table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
        border:2px solid #ddd !important; 
    }
</style>
    <link href="{{asset('css/bootstrap-editable.css')}}" rel="stylesheet">



@endsection


@section('content')
    <div id="slide-panel">
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
                                        {{-- <tr>
                                            <td>
                                                Registration Details
                                            </td>
                                            <td>
                                                <a href="#" id="dt" data-type="datetimepicker" data-pk="1" data-url="/post" data-title="Enter username"></a>
                                            </td>
                                        </tr> --}}
                                      
                                        
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
                    </ul> --}}
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






    </div>

@endsection



@section('scripts')
    <script src="{{asset('js/bootstrap-editable.min.js')}}"></script>

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

    </script>

@endsection

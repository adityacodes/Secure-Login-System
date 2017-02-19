@extends('layouts.user')

@section('title', 'My Profile')

@section('stylesheets')




@endsection


@section('content')
    <div id="slide-panel">
        <a href="#" class="btn btn-danger opener" id="opener"><i class="glyphicon glyphicon-align-justify"></i></a>
        <div id="panels" class="panel panel-default panel2">
            <div class="ph panel-body ">
                <h5>Personal settings </h5>

            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Setting
                    </div>
                    <div class="panel-body">
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Referrer
                    </div>
                    <div class="panel-body">

                        <p>My saved referal
                            koyamatakahiro@yahoo.com</p>

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
            <div class="panel-footer">
                <div class="tree">
                    <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>
 General Information(double mouse click on the name, then enter the data and then 'Save' in the left side)</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td>
                                                First Name
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Last Name
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Status
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mobile
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                DOB
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Registration Details
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
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Region</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td>
                                                Country
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Region
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                City
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
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Contact</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td>
                                                Skype
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Twitter
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Website
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Facebook
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Google
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
                                            <td>
                                                Name
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Status
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
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
                    <ul>
                        <li>
                            <span class="badge"><i class="fa fa-minus" aria-hidden="true"></i>  Your Guider's Guider</span>
                            <ul>
                                <li>
                                    <table class="table table-hover table-bordered">
                                        <tr>
                                            <td>
                                                Name
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Status
                                            </td>
                                            <td>
                                                Cell Number
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email
                                            </td>
                                            <td>
                                                FirstName
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
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
    <script>
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
            $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
            $('.tree li.parent_li > span').on('click', function (e) {
                var children = $(this).parent('li.parent_li').find(' > ul > li');
                if (children.is(":visible")) {
                    children.hide('fast');
                    $(this).attr('title', 'Expand this branch').find(' > i').addClass('fa-plus').removeClass('fa-minus');
                } else {
                    children.show('fast');
                    $(this).attr('title', 'Collapse this branch').find(' > i').addClass('fa-minus').removeClass('fa-plus');
                }
                e.stopPropagation();
            });
        });
    </script>




@endsection

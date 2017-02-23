@extends('layouts.user')

@section('title', 'Referral')

@section('stylesheets')
    <style>
        table{
            font-size: 14px;
            background-color: #FFFFFF;
        }
        .panel-body{
            padding: 0px;
        }
        .panel-header{
            font-size: 14px;
            padding: 6px;
        }
        .panel-footer{
            font-size: 12px;
            background-color: #FEF8E4;
        }
        .footer{
            bottom: 0px;
            padding: 0px;
        }
    </style>
@endsection

@section('content')
    <div class="panel panel-default">
        <div class="panel-header ph">
            Participants
        </div>
        <div class=" panel-body ">
            <table class="table table-bordered">
                <tr>
                    <td></td>
                    <td>Participant</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Guider</td>
                    <td>Mobile</td>
                    <td>City</td>
                    <td>Registration Date</td>
                    <td>Status</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Participant</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Guider</td>
                    <td>Mobile</td>
                    <td>City</td>
                    <td>Registration Date</td>
                    <td>Status</td>

                </tr>
            </table>
        </div>
    </div>




@endsection

@section('scripts')

@endsection
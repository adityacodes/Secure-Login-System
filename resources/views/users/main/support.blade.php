@extends('layouts.user')

@section('title', 'Support')


@section('stylesheets')
@endsection

@section('content')
    <div data-options="region:'west',split:true" title="Create Support Ticket" style="width:400px;padding: 40px">
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-add'">Create Ticket</a>
        <ol>
            <li><a href="#">Change of guider</a><br>Date:12/14/2016 2:28:56 PM</li>
            <li><a href="#">Sender attached false screenshot of payment.</a><br>Date:11/28/2016 4:40:56 PM</li>
            <li><a href="#">Help receiver does not confirm receipt of funds</a><br>Date:11/22/2016 5:22:47 PM</li>

        </ol>
    </div>
    <div data-options="region:'center',title:'Support Ticket'">

    </div>
@endsection

@section('scripts')
@endsection
@extends('layouts.user')

@section('title', 'Support')


@section('stylesheets')
@endsection

@section('content')
    <div data-options="region:'west',split:true" title="Create Support Ticket" style="width:400px;padding: 40px;text-align:center">
        <a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-add'" >Create Ticket</a>

    </div>
    <div data-options="region:'center',title:'Support Ticket'">

    </div>
@endsection

@section('scripts')
@endsection
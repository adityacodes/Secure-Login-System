@extends('layouts.user')

@section('title', 'Participants')

@section('stylesheets')




@endsection


@section('content')

    <div class="easyui-layout" style="height: 650px;">

        <div data-options="region:'south',split:true" style="height:50px;"></div>
        <div data-options="region:'west',split:true" title="My participants" style="width: 200px;">
            <div class="easyui-panel" style="padding:5px">
                <ul class="easyui-tree" data-options="">
                    <li>kdfskjhk</li>
                    <li>kdfskjhk</li>
                </ul>
            </div>
        </div>
        <div data-options="region:'center'" style="width: 1400px;">
            <table class="easyui-datagrid"
                   data-options="url:'datagrid_data1.json',method:'get',border:false,singleSelect:true,fit:true,fitColumns:true">
                <thead>
                <tr>
                    <th></th>
                    <th data-options="field:'itemid'" width="80">Position</th>
                    <th data-options="field:'productid'" width="100">First name</th>
                    <th data-options="field:'listprice',align:'right'" width="80">Last Name</th>
                    <th data-options="field:'unitcost',align:'right'" width="80">Email</th>
                    <th data-options="field:'attr1'" width="150">Guider</th>
                    <th data-options="field:'attr1'" width="150">City</th>
                    <th data-options="field:'attr1'" width="150">Referrer</th>
                    <th data-options="field:'status',align:'center'" width="60">Status</th>
                    <th data-options="field:'attr1'" width="150">Date of Creation</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection



@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>




@endsection

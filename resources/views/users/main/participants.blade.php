@extends('layouts.user')

@section('title', 'Participants')

@section('stylesheets')




@endsection


@section('content')

    <div id="cc" class="easyui-layout" style="height: 650px; margin-top: +10px">

        {{-- <div data-options="region:'south',split:true" style="height:50px;"></div> --}}

        <div data-options="region:'west',split:true" title="My participants" style="width:180px;">
            <div class="easyui-panel" >
                <ul class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true,lines:true">
                    
                </ul>
            </div>
        </div> 
        <div data-options="region:'center',iconCls:'icon-ok'" title="Participants">
            <div class="easyui-layout" data-options="fit:true">
                <div data-options="region:'center'">
                    <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                           url="datagrid_data1.json"
                           toolbar="#toolbar" pagination="true"
                           rownumbers="true" fitColumns="true" singleSelect="true">
                        <thead>
                        <tr>
                            <th data-options="field:'position'" width="80">Position</th>
                            <th data-options="field:'firstname'" width="100">First name</th>
                            <th data-options="field:'lastname'" width="80">Last Name</th>
                            <th data-options="field:'email'" width="150">Email</th>
                            <th data-options="field:'guider'" width="150">Guider</th>
                            <th data-options="field:'city'" width="150">City</th>
                            <th data-options="field:'referer'" width="150">Referrer</th>
                            <th data-options="field:'status',align:'center'" width="60">Status</th>
                            <th data-options="field:'doc'" width="150">Date of Creation</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        

    </div>

@endsection



@section('scripts')
    <script type="text/javascript">
        $('#cc').layout();
    </script>



@endsection

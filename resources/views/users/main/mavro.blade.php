@extends('layouts.user')

@section('title', 'Mavro')


@section('stylesheets')
@endsection

@section('content')
        <div data-options="region:'south',split:true" style="height:50px;">
            <table>
                <tr>
                    <td width="70%">Green -- available for withdrawal; Blue -- Frozen; Red -- Not Confirmed</td>
                    <td>Accumulated Guider Bonus: Unconfirmed: 250.0000 Confirmed:</td>

                </tr>
            </table>
        </div>
        <div data-options="region:'center',title:'Mavro'">
            <div class="easyui-layout" data-options="fit:true">

                <div id="toolbar">
                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-help" plain="true" onclick="newUser()">Transaction</a>
                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-account" plain="true" onclick="editUser()">Available for withdrawal</a>
                    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-account" plain="true" onclick="destroyUser()">Cashout Mavro</a>
                </div>
                <table id="dg" class="easyui-datagrid" style="width:100%;height: 580px;"
                       url="datagrid_accounts.json"
                       toolbar="#toolbar" fitColumns="true" singleSelect="true" data-options="
                    rownumbers:true,
                    singleSelect:true,
                    autoRowHeight:false,
                    pagination:true,
                    pageSize:10">
                    <thead>
                    <tr>
                        <th field="accountid" >ID</th>
                        <th field="firstname" >Type</th>
                        <th field="currencycode" >Date of Creation</th>
                        <th field="bank" >Release Date</th>
                        <th field="accno" >Wallet</th>
                        <th field="details" >Description</th>
                        <th field="details" width="40">Principal Amount</th>
                        <th field="details" width="70" >Today / At the date of defrost</th>
                        <th field="details" >Future</th>
                        <th field="details">Comment</th>
                    </tr>
                    </thead>
                </table>
        </div>
@endsection

@section('scripts')
                <script>
                    (function($){
                        function pagerFilter(data){
                            if ($.isArray(data)){    // is array
                                data = {
                                    total: data.length,
                                    rows: data
                                }
                            }
                            var target = this;
                            var dg = $(target);
                            var state = dg.data('datagrid');
                            var opts = dg.datagrid('options');
                            if (!state.allRows){
                                state.allRows = (data.rows);
                            }
                            if (!opts.remoteSort && opts.sortName){
                                var names = opts.sortName.split(',');
                                var orders = opts.sortOrder.split(',');
                                state.allRows.sort(function(r1,r2){
                                    var r = 0;
                                    for(var i=0; i<names.length; i++){
                                        var sn = names[i];
                                        var so = orders[i];
                                        var col = $(target).datagrid('getColumnOption', sn);
                                        var sortFunc = col.sorter || function(a,b){
                                                return a==b ? 0 : (a>b?1:-1);
                                            };
                                        r = sortFunc(r1[sn], r2[sn]) * (so=='asc'?1:-1);
                                        if (r != 0){
                                            return r;
                                        }
                                    }
                                    return r;
                                });
                            }
                            var start = (opts.pageNumber-1)*parseInt(opts.pageSize);
                            var end = start + parseInt(opts.pageSize);
                            data.rows = state.allRows.slice(start, end);
                            return data;
                        }

                        var loadDataMethod = $.fn.datagrid.methods.loadData;
                        var deleteRowMethod = $.fn.datagrid.methods.deleteRow;
                        $.extend($.fn.datagrid.methods, {
                            clientPaging: function(jq){
                                return jq.each(function(){
                                    var dg = $(this);
                                    var state = dg.data('datagrid');
                                    var opts = state.options;
                                    opts.loadFilter = pagerFilter;
                                    var onBeforeLoad = opts.onBeforeLoad;
                                    opts.onBeforeLoad = function(param){
                                        state.allRows = null;
                                        return onBeforeLoad.call(this, param);
                                    }
                                    var pager = dg.datagrid('getPager');
                                    pager.pagination({
                                        onSelectPage:function(pageNum, pageSize){
                                            opts.pageNumber = pageNum;
                                            opts.pageSize = pageSize;
                                            pager.pagination('refresh',{
                                                pageNumber:pageNum,
                                                pageSize:pageSize
                                            });
                                            dg.datagrid('loadData',state.allRows);
                                        }
                                    });
                                    $(this).datagrid('loadData', state.data);
                                    if (opts.url){
                                        $(this).datagrid('reload');
                                    }
                                });
                            },
                            loadData: function(jq, data){
                                jq.each(function(){
                                    $(this).data('datagrid').allRows = null;
                                });
                                return loadDataMethod.call($.fn.datagrid.methods, jq, data);
                            },
                            deleteRow: function(jq, index){
                                return jq.each(function(){
                                    var row = $(this).datagrid('getRows')[index];
                                    deleteRowMethod.call($.fn.datagrid.methods, $(this), index);
                                    var state = $(this).data('datagrid');
                                    if (state.options.loadFilter == pagerFilter){
                                        for(var i=0; i<state.allRows.length; i++){
                                            if (state.allRows[i] == row){
                                                state.allRows.splice(i,1);
                                                break;
                                            }
                                        }
                                        $(this).datagrid('loadData', state.allRows);
                                    }
                                });
                            },
                            getAllRows: function(jq){
                                return jq.data('datagrid').allRows;
                            }
                        })
                    })(jQuery);

                    function getData(){
                        var rows = [];
                        for(var i=1; i<=800; i++){
                            var amount = Math.floor(Math.random()*1000);
                            var price = Math.floor(Math.random()*1000);
                            rows.push({
                                inv: 'Inv No '+i,
                                date: $.fn.datebox.defaults.formatter(new Date()),
                                name: 'Name '+i,
                                amount: amount,
                                price: price,
                                cost: amount*price,
                                note: 'Note '+i
                            });
                        }
                        return rows;
                    }

                    $(function(){
                        $('#dg').datagrid({data:getData()}).datagrid('clientPaging');
                    });
                </script>
@endsection
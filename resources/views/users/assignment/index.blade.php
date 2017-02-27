@foreach($assignments as $as)
        <br>
        <div id="p1"  class="easyui-panel" style="width:360px;height:190px;padding:10px;">
            <table>
                <tr>
                    <td width="90%">Request to get help
                        Z {{ $as->as_id }} </td>
                    <td><img src="{{asset('easyui/themes/icons/strelka_32.png')}}"></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        Participant: {{Auth::user()->name}} <br>
                        Amount: {{ $as->as_amount}} Mavro-USD <br>
                        Balance: 0 Mavro-USD <br>
                        Date: {{ $as->created_at }} <br>

                        Status: {{ $as->as_status }}
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="90%">
                        <a href="#" onclick="$('#cancelOrderbox').dialog('open')" class="easyui-linkbutton">Cancel Request</a>
                    </td>
                    <td>
                        <a href="#" onclick="$('#assignmentDetailbox').dialog('open')" class="easyui-linkbutton">Details>></a>
                    </td>
                </tr>
            </table>
        </div>
@endforeach
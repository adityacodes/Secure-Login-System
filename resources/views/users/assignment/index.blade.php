@if($assignments->total()!=0)
    @foreach($assignments as $as) 
            <br>
            <div id="a_{{ $as->as_id }}">
                <div  class="easyui-panel reqa" style="width:360px;height:190px;padding:10px;">
                    <table>
                        <tr>
                            <td width="90%">Request to get help
                                Z {{ $as->as_id }} </td>
                            <td><img src="{{ asset('easyui/themes/icons/strelka_31.png') }}"></td>
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
                                <a href="#" onclick="cancelAss({{ $as->as_id }})" class="easyui-linkbutton">Cancel Request</a>
                            </td>
                            <td>
                                <a href="#" onclick="showDetail('a_{{ $as->as_id }}')" class="easyui-linkbutton">Details>></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
    @endforeach

@else
<p>No  assignments found.</p>

@endif
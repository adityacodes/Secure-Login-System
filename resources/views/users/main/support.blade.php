@extends('layouts.user')

@section('title', 'Support')


@section('stylesheets')
@endsection

@section('content')
    <div data-options="region:'west',split:true" title="Create Support Ticket" style="width:400px;padding: 40px;text-align:center">
        <button type="button" class="easyui-linkbutton" data-options="iconCls:'icon-add'" onclick="newticketOpen()">Create Ticket</button>
    </div>
    <div data-options="region:'center',title:'Support Ticket'">

    </div>
    <div id="fdd" style="top: 60px;">
        <div style="text-align: center; font-weight: bold; line-height: 21px; padding: 20px;">

            <table style="width: 99%; margin: auto;">
                <tr>
                    <td style="text-align: center;">
                        <span style="text-align: center; color: #000; font-weight: bold;">Here, you may ask a question that will be sent to one of the administrators or
                        </span>

                        <span style="text-align: center; color: #000; font-weight: bold;">to a CRO co-worker.
                        </span>

                        <span style="text-align: center; color: #000; font-weight: bold;">As soon as your request is taken for consideration, you will be informed about the decision.</span>

                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <span style="text-align: center; color: #000; font-weight: bold;">Attention!
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; padding: 10px 0px 2px 0px;">
                        <span style="color: #000; font-weight: bold;">Before sending a request, carefully watch video instructions and read FAQs. Questions with direct answers in video instructions
                            <br />
                            will be deleted ruthlessly.</span>

                        <span style="text-align: center; color: #000; font-weight: bold;">Once again, about fixing errors in the PO - we are aware that there are still some and will continue to improve the site. Updates are done daily, around 16:00 Greenwich Time Zone. If something does not work, please, try after 16:00-17:00 GMT.</span>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0px 10px 0px 10px;">
                        <table style="width: 90%; margin: auto;">

                                <tr>

                                <form id="createTicket" enctype="multipart/form-data" method="POST">   
                                    <td style="width: 50px; text-align: right;">Topic
                                    </td>
                                    <td>
                                        <select name="topic" id="subject" style="width: 520px;">
                                            <option value="">Select a topic</option>
                                            <option value="104">Other questions</option>
                                            <option value="100">Help receiver does not confirm receipt of funds</option>
                                            <option value="458">The participant informed that funds weren&#39;&#39;t received</option>
                                            <option value="432">I have provided help, but the contribution was not confirmed</option>
                                            <option value="8">Administration&#39;s mistake or error</option>
                                            <option value="461">My account was hacked/stolen</option>
                                            <option value="101">Problems with recipient&#39;s requisites</option>
                                            <option value="103">Participant is blocked</option>
                                            <option value="202">Sender attached false screenshot of payment.</option>
                                            <option value="463">I have paid the order but it has been cancelled.</option>
                                            <option value="462">I got help, but the order has been cancelled.</option>
                                            <option value="433">Remove wrong request</option>
                                            <option value="436">Country change.</option>
                                            <option value="438">The problems with providing help</option>
                                            <option value="439">Problems with the creation of the withdrawal orders</option>
                                            <option value="452">Сhange email</option>
                                            <option value="453">Сhange phone number</option>
                                            <option value="454">Inform about frauds and dissenters</option>
                                            <option value="457">Delete Personal Office</option>
                                            <option value="464">Identity verification</option>
                                            <option value="465">Registration (referral, guider’s) bonus hasn’t been credited.</option>
                                            <option value="459">Change of guider</option>
                                        </select>
                                    </td>
                                </tr>
                                {{Form::token()}}
                                <tr>
                                    <td style="width: 50px; text-align: right;">Your Message</td>
                                    <td>
                                        <textarea name="message" id="message" style="height: 150px; width: 520px;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50px; text-align: right;">Files
                                    </td>
                                    <td style="text-align: left">
                                        <input type="file" value="Upload File" name="file" id="ticketfile" />
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>
            </table>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        function newticketOpen() {
            $('#fdd').dialog({
                title: ' Create new ticket',
                width: 750,
                closed: false,
                cache: false,
                iconCls: 'icon-add',
                maximizable: false,
                modal: true,
                buttons: [{
                    text: 'Add Ticket',
                    iconCls: 'icon-add',
                    handler: function () {
                        
                        $('#createTicket').form({
                            url:'{{url('mmmuser/saveTicket')}}',
                            onSubmit:function(){
                                return $(this).form('validate');
                            },
                            success:function(data){
                                $('#fdd').dialog('close');
                                $.messager.alert('Info', data, 'info');
                            }
                        });
                    }
                }, {
                    text: 'Close',
                    iconCls: 'icon-cancel',
                    handler: function () {
                        $('#fdd').dialog('close');
                    }
                }]
            });
        }

    </script>
@endsection
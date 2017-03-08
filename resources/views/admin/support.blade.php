@extends('layouts.admin')


@section('title', 'SUPPORT')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">TICKETS</h4>
                    <h5 class="text-center">
                        SELECT TICKETS BY DATE :<input id="assbydate" type="date">
                    </h5>
                    <table border="1">
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead style="font-size: 10px">
                        <th>SL.NO.</th>
                        <th>USER ID</th>
                        <th>TOPIC</th>
                        <th>MESSAGE</th>
                        <th>ATTACHMENTS</th>
                        <th>STATUS</th>
                        <th>CREATED AT</th>
                        <th>ACTIONS</th>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{$ticket->id}}</td>
                                <td>{{$ticket->user_id}}</td>
                                <td>{{$ticket->topic}}</td>
                                <td>{{$ticket->message}}</td>
                                <td>{{$ticket->file}}</td>
                                <td>{{$ticket->status}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td>
                                    @if($ticketcreated)
                                        <a onclick="" href="" ><button class="btn btn-md btn-success" style="width: 80px; height: 30px; font-size: 12px">SHOW</button></a>
                                    @else
                                        <a onclick="" href="" ><button class="btn btn-md btn-success" style="width: 80px; height: 30px; font-size: 12px">CREATE</button></a>
                                    @endif
                                    {{-- On clicking create ticket send this to tickets/create with the ticket ID --}}
                                    <a onclick="" href="" ><button class="btn btn-md btn-danger" style="width: 80px; height: 30px; font-size: 12px">CANCEL</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $tickets->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
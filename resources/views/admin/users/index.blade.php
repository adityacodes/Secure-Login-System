@extends('layouts.admin')

@section('title','All Users')




@section('stylesheets')


@endsection



@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Users</h4>
                    <h5 class="text-center">
						SELECT USERS BY DATE :<input id="assbydate" type="date">
					</h5>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead style="font-size: 10px">
							<th>USER ID</th>
							<th>USER NAME</th>
							<th>EMAIL</th>
							<th>MOBILE</th>
							<th>HELPS PROVIDED</th>
							<th>ACCEPTED HELPS</th>
							<th>CREATED ON</th>
							<th>ACTIONS</th>
                        </thead>
                        <tbody>
						@foreach($users as $user)
							<tr>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->mobile}}</td>
								<td>{{$user->helpsprovided}}</td>
								<td>{{$user->helpsaccepted}}</td>
								<td>{{$user->created_at}}</td>

								<td>
										<a onclick="" href="" ><button class="btn btn-md btn-danger" style="width: 80px; height: 30px; font-size: 12px">DELETE</button></a>
								</td>
							</tr>
						@endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
	                	{!! $users->render() !!}
	                </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('scripts')


@endsection
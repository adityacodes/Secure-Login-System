@extends('layouts.admin')


@section('title', 'ADMIN ORDERS')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">ORDERS</h4>
						<h5 class="text-center">
							SELECT ORDERS BY DATE :<input id="assbydate" type="date">
						</h5>
				</div>
				<div class="content table-responsive table-full-width">
					<table class="table table-striped">
						<thead style="font-size: 10px">
						<th>SL.NO.</th>
						<th>ORDER ID</th>
						<th>ASSIGNMENT ID</th>
						<th>AMOUNT</th>
						<th>PAID/UNPAID</th>
						<th>MESSAGE</th>
						<th>STATUS</th>
						<th>RECIPIENT</th>
						<th>SENDER</th>
						<th>ACTIONS</th>
						</thead>
						<tbody>
						@foreach($orders as $order)
							<tr>
								<td>{{$order->id}}</td>
								<td>{{$order->or_id}}</td>
								<td>{{$order->or_as_id}}</td>
								<td>{{$order->or_amount}}</td>
								<td>{{$order->aor_isadminpayed}}</td>
								<td>{{$order->or_screenshot_admin}}</td>
								<td>{{$order->or_status}}</td>
								<td>{{$order->or_to}}</td>
								<td>{{$order->or_for}}</td>
								<td>
									@if($ordercreated)
										<a onclick="" href="" ><button class="btn btn-md btn-success" style="width: 80px; height: 30px; font-size: 12px">SHOW</button></a>
									@else
										<a onclick="" href="" ><button class="btn btn-md btn-success" style="width: 80px; height: 30px; font-size: 12px">CREATE</button></a>
									@endif
									{{-- On clicking create Order send this to orders/create with the order ID --}}
									<a onclick="" href="" ><button class="btn btn-md btn-danger" style="width: 80px; height: 30px; font-size: 12px">CANCEL</button></a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<div class="text-center">
	                	{!! $orders->render() !!}
	                </div>
				</div>
			</div>
		</div>
	</div>




@endsection
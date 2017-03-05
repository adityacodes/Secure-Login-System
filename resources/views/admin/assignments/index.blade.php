@extends('layouts.admin')

@section('title', 'ADMIN ASSIGNMENTS')


@section('content')
	<br>
	<br>
	<div class="static-content">
		<div class="page-content">
			<ol class="breadcrumb">

				<li><a href="index.html">Home</a></li>
				<li><a href="#">Advanced Tables</a></li>
				<li class="active"><a href="tables-editable.html">Editable Tables</a></li>

			</ol>
			<div class="page-heading">
				<h1>Editable Tables</h1>
			</div>
			<div class="container-fluid">

				<div data-widget-group="group1">
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info">
								Click on any field to edit the data! Make sure to do your mojo in the backend to actually save the data.
								<button type="button" class="close" data-dismiss="alert">&times;</button>
							</div>
							<div class="panel panel-default" id="panel-inline">
								<div class="panel-heading">
									<h2>Inline Data Tables editing</h2>
									<div class="panel-ctrls"></div>
								</div>
								<div class="panel-body no-padding">

									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="editable">
										<thead>
										<tr>
											<th>Rendering engine</th>
										</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--
	SELECT ASSIGNMENTS BY DATE :<input id="assbydate" type="date"><br>
	<table border="1">
		<thead>
			<th>ASSIGNMENT ID</th>
			<th>STATUS</th>
			<th>AMOUNT</th>
			<th>MESSAGE</th>
			<th>CANCEL REASON</th>
			<th>USER ID</th>
			<th>CREATED ON</th>
			<th>Actions</th>
		</thead>
		<tbody>

		</tbody>
	</table>-->
@endsection


@section('scripts')
	<script type="text/javascript">
		
		$('#assbydate').change(function(){
			// Filter assignments by Date using AJAX REQUEST
		});




	</script>




@endsection


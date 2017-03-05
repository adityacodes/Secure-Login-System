@extends('layouts.admin')

@section('title', 'ADMIN ASSIGNMENTS')


@section('content')
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Striped Table</h4>
                    <p class="category">Here is a subtitle for this table</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                        	<th>Name</th>
                        	<th>Salary</th>
                        	<th>Country</th>
                        	<th>City</th>
                        </thead>
                        <tbody>
                            <tr>
                            	<td>1</td>
                            	<td>Dakota Rice</td>
                            	<td>$36,738</td>
                            	<td>Niger</td>
                            	<td>Oud-Turnhout</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
		<!--
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


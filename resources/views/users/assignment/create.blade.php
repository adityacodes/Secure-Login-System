<div class="container" id="myWizard">

	<div class="col-md-8">
	  
	   <div class="navbar hidden">
	      <div class="navbar-inner">
	            <ul class="nav nav-pills">
	               <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Step 1</a></li>
	               <li><a href="#step2" data-toggle="tab" data-step="2">Step 2</a></li>
	               <li><a href="#step3" data-toggle="tab" data-step="3">Step 3</a></li>

	            </ul>
	      </div>
	   </div>
	   {!! Form::open(array('route' => 'users.assignment.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off')) !!}
	   		<div class="tab-content">

		      <div class="tab-pane fade in active" id="step1">
		      		<div class="form-group">
			            
			            <div class="col-sm-1">
			            	<input style="" type="checkbox" name="warning" class="form-control">         
			            </div>
			            <div class="col-sm-11">
			            	WARNING! By entering this you agree to the terms and conditions.
			            </div>

			        </div>
		        <a class="btn btn-default btn-lg next" href="#">Continue</a>
		      </div>

		      <div class="tab-pane fade" id="step2">
		         <div class="form-group">
			            <label class="control-label col-sm-2" style="font-size: 15px;">Participant : </label>
			            <div class="col-sm-10">
			            	<input  type="text" class="form-control" disabled="" value="{{Auth::user()->name}}">         
			            </div>
			        </div>
		            <div class="form-group">
					    <label class="control-label col-sm-2" for="amount" style="font-size: 15px;">Amount:</label>
					    <div class="col-sm-10">
					      <input type="amount" class="form-control" name="amount" id="amount" placeholder="Enter amount">
					    </div>
					</div>
		         <a class="col-md-offset-12 btn btn-default next" href="#">Continue</a>
			  </div>

			  <div class="tab-pane fade" id="step3">
				 	<div class="form-group">
					    <label class="control-label col-sm-2" for="message" style="font-size: 15px;">Message:</label>
					    <div class="col-sm-10">
					      <textarea type="message" class="form-control" name="message" id="message"></textarea> 
					    </div>
					</div>

					<button type="submit" class="col-md-offset-12 btn btn-default submit">Submit</button>
			  </div>

		    </div>
	   </div>


	   
		{!! Form::close() !!}
	</div>
</div>

<script type="text/javascript">




</script>
	
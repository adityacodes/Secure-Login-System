<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | MMM </title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<style type="text/css">
		
		.panel-default>.panel-heading
		{
			background-color: #FEF8E4;
			border-color: #FEEEBD;
		}

		.body, .panel-default>.panel-body
		{
			background-color: #FEEEBD;
		}

		.panel-default{

			border-color: #FEEEBD;
		}


		.bttn{
			font-size: 12px;
			background-color: #FEEEBD;
		}
		.bttn:hover ,
		.bttn:focus,
		.bttn:active{
			border: 0.1px solid red;
			background-color: #FEE890;
		}

	</style>
</head>
<body class="body">

<div class="container-fluid" style="padding: 0;">
	<div class="panel panel-default">
	    <div class="panel-heading">
	    	<ul class="list-inline">

		    	<li>
		    		<img src="http://placehold.it/61x40">
		    	</li>
	    		<li>
	    			<a style="color: black;" href="{{url('/dashboard')}}"><button class="btn bttn"><img width="16" height="16" src="{{asset('icons/desktop.png')}}"> DASHBOARD</button></a>
	    		</li>

	    		<li>
	    			<div class="dropdown">
					    <button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown">
					    	<img width="16" height="16" src="{{asset('icons/groupicon.png')}}"> PARTICIPANTS
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
					      <li><a href="#">TRUSTEE</a></li>
					      <li><a href="#">REFERALS</a></li>
					    </ul>
					</div>
	    		</li>

	    		<li>
	    			<div class="dropdown">
					    <button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown"> <img width="16" height="16" src="{{asset('icons/user.png')}}"> MY PAGE
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
					      <li><a href="#"> <img width="16" height="16" src="{{asset('icons/user.png')}}"> PROFILE</a></li>
					      <li><a href="#">MY LETTER OF HAPPINESS</a></li>
					    </ul>
					</div>
				</li>

	    		<li>
	    			<button class="btn bttn"> <img width="16" height="16" src="{{asset('icons/promo.png')}}"> PROMO TASKS</button>
	    		</li>

	    		<li>
	    			<button class="btn bttn"> MAVRO</button>
	    		</li>

	    		<li>
	    			<button class="btn bttn"> <img width="16" height="16" src="{{asset('icons/account.png')}}"> ACCOUNTS</button>
	    		</li>

	    		

	    		<li class="pull-right">
	    			<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/logout.png')}}"> 
	    			LOGOUT</button>
	    		</li>

	    		<li class="pull-right">
	    			<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/support.png')}}"> 
	    			SUPPORT</button>
	    		</li>

	    		<li class="pull-right">
	    			<div class="dropdown">
					    <button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown"> <img width="16" height="16" src="{{asset('icons/information.png')}}"> Information
					    <span class="caret"></span></button>
					    <ul class="dropdown-menu">
					      <li><a href="#"> NEWS</a></li>
					      <li><a href="#"> FAQs </a></li>
					      <li><a href="#"> Promotion </a></li>
					      <li><a href="#"> Webnairs </a></li>
					    </ul>
					</div>
				</li>

				<li class="pull-right">
	    			<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/inbox.png')}}"><sup style="color: red;">0</sup></button>
	    		</li>

	    	</ul>

	    </div>
	    <div class="panel-body">
	    					
	    @yield('content')
	    </div>
  	</div>
</div>
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>
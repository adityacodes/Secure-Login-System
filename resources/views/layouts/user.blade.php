<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | MMM </title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styler.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/css/jqueryui-editable.css" rel="stylesheet"/>
	@yield('stylesheets')

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->
</head>
	<body class="body">

		<div class="container-fluid" style="padding: 0;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<ul class="list-inline newnav">

						<li>
							<img width="61" height="40" src="{{asset('icons/mmm.png')}}">
						</li>
						<li class="{{Request::is('dashboard')? 'active' : ''}}">
							<a style="color: black;" href="{{url('/dashboard')}}">
								<button class="btn bttn">
									<img width="16" height="16" src="{{asset('icons/desktop.png')}}"> 
									DASHBOARD
								</button>
							</a>
						</li>

						<li class="{{Request::is('trustee') || 
									  Request::is('referals') ? 'active' : ''}}">
							<div class="dropdown">
								<button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown">
									<img width="16" height="16" src="{{asset('icons/groupicon.png')}}"> PARTICIPANTS
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li>
										<a id="trustee" href="{{url('/trustee')}}" title="Participants that appointed you as a Trustee (If you have been so:-)) Details on the page 'HOW DOES IT WORK', section 'Trustees'. (TO Get to know who are trustees "> 
											<img width="16" height="16" src="{{asset('icons/groupicon.png')}}">TRUSTEE
										</a>
									</li>
									<li>
										<a id="referals" href="{{url('/referals')}}" title="You receive Referral Bonus for your referrals.">
											<img width="16" height="16" src="{{asset('icons/groupicon.png')}}">REFERALS
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="{{Request::is('profile') || 
									  Request::is('letter-of-happiness') ? 'active' : ''}}

									">
							<div class="dropdown">
								<button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown"> 
									<img width="16" height="16" src="{{asset('icons/user.png')}}"> 
									MY PAGE
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li>
										<a href="{{ url('/profile') }}" title="Information you submitted during registration"> <img width="16" height="16" src="{{asset('icons/user.png')}}"> 
											PROFILE
										</a>
									</li>
									<li>
										<a href="{{ url('/letter-of-happiness') }}"> 
											<img width="16" height="16" src="{{asset('icons/letter.png')}}"> 
											MY LETTER OF HAPPINESS
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="{{Request::is('promo-tasks')? 'active' : ''}}">
							<a href="{{ url('/promo-tasks') }}">
								<button class="btn bttn"> 
									<img width="16" height="16" src="{{asset('icons/promo.png')}}"> PROMO TASKS
								</button> 
							</a>
						</li>

						<li class="{{Request::is('mavro')? 'active' : ''}}">
							<button class="btn bttn"> MAVRO</button>
						</li>

						<li class="{{Request::is('accounts')? 'active' : ''}}">
							<a href="{{ url('/accounts') }}">
								<button class="btn bttn"> <img width="16" height="16" src="{{asset('icons/account.png')}}"> ACCOUNTS
								</button>
							</a>
						</li>



						<li class="pull-right">
						<a href="{{url('logout')}}">
							<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/logout.png')}}"> 
								LOGOUT
							</button>
						</a>
						</li>

						<li class="pull-right {{Request::is('support')? 'active' : ''}}">
							<a href="{{ url('/support') }}">
								<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/support.png')}}"> 
									SUPPORT
								</button>
							</a>
						</li>

						<li class="pull-right
									{{Request::is('news') || 
									  Request::is('faq') || 
									  Request::is('promotion-materials') || 
									  Request::is('webnairs') ? 'active' : ''}}

									">
							<div class="dropdown">
								<button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown"> 
									<img width="16" height="16" src="{{asset('icons/information.png')}}"> Information
									<span class="caret"></span>
								</button>
									<ul class="dropdown-menu">
										<li>
											<a href="{{url('/news')}}"> 
												<img width="16" height="16" src="{{asset('icons/news.png')}}"> NEWS
											</a>
										</li>
										<li>
											<a href="{{url('/faq')}}"> 
												<img width="16" height="16" src="{{asset('icons/faq.png')}}"> FAQs 
											</a>
										</li>
										<li>
											<a href="{{url('/promotion-materials')}}">
												<img width="16" height="16" src="{{asset('icons/promotion.png')}}"> Promotion 
											</a>
										</li>
										<li>
											<a href="{{url('/webnairs')}}"><img width="16" height="16" src="{{asset('icons/information.png')}}"> 
												Webnairs 
											</a>
										</li>
									</ul>
							</div>
						</li>

						<li class="pull-right {{Request::is('notices')? 'active' : ''}}">
							<a href="{{url('/notices')}}">
								<button class="btn bttn">
									<img width="16" height="16" src="{{asset('icons/inbox.png')}}">
									<sup style="color: red;">0</sup>
								</button>
							</a>
						</li>
					</ul>
				</div>
				{{-- Start with panel-body in content --}}
					@yield('content')
				</div>
			</div>
		</div>
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
					@yield('scripts')


	</body>
</html>
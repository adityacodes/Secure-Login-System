<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | MMM UNION</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/styler.css')}}"> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('easyui/themes/default/easyui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('easyui/themes/icon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('easyui/demo/demo.css')}}"> --}}
	<link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
	@yield('stylesheets')

</head>

	<body class="easyui-layout bg" id="layoutcc">



		{{-- <div class="container-fluid" style="padding: 0;">
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
									Dashboard
								</button>
							</a>
						</li>

						<li class="{{Request::is('participants') ||
									  Request::is('referals') ? 'active' : ''}}">
							<div class="dropdown">
								<button class="btn bttn dropdown-toggle" type="button" data-toggle="dropdown">
									<img width="16" height="16" src="{{asset('icons/groupicon.png')}}"> Participants
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li>
										<a id="participants" href="{{url('/participants')}}" title="Know about all the participants here. Have the ability to add them. ">
											<img width="16" height="16" src="{{asset('icons/groupicon.png')}}">Participants
										</a>
									</li>
									<li>
										<a id="referals" href="{{url('/referals')}}" title="You receive Referral Bonus for your referrals.">
											<img width="16" height="16" src="{{asset('icons/groupicon.png')}}">Referals
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
									My Page
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li>
										<a href="{{ url('/profile') }}" title="Information you submitted during registration"> <img width="16" height="16" src="{{asset('icons/user.png')}}"> 
											Profile
										</a>
									</li>
									<li>
										<a href="{{ url('/letter-of-happiness') }}"> 
											<img width="16" height="16" src="{{asset('icons/letter.png')}}"> 
											My Letter Of Happiness
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="{{Request::is('promo-tasks')? 'active' : ''}}">
							<a href="{{ url('/promo-tasks') }}">
								<button class="btn bttn"> 
									<img width="16" height="16" src="{{asset('icons/promo.png')}}"> Promo Tasks
								</button> 
							</a>
						</li>

						<li class="{{Request::is('mavro')? 'active' : ''}}">
							<button class="btn bttn"> Mavro</button>
						</li>

						<li class="{{Request::is('accounts')? 'active' : ''}}">
							<a href="{{ url('/accounts') }}">
								<button class="btn bttn"> <img width="16" height="16" src="{{asset('icons/account.png')}}"> Accounts
								</button>
							</a>
						</li>



						<li class="pull-right">
						<a href="{{url('logout')}}">
							<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/logout.png')}}"> 
								Logout
							</button>
						</a>
						</li>

						<li class="pull-right {{Request::is('support')? 'active' : ''}}">
							<a href="{{ url('/support') }}">
								<button class="btn bttn"><img width="16" height="16" src="{{asset('icons/support.png')}}"> 
									Support
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
											<a href=""> 
												<img width="16" height="16" src="{{asset('icons/news.png')}}"> News
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

				</div>
			</div>
		</div> 

		--}}
		<div data-options="region:'north'" style="margin-top: -2px; height: 52px; overflow: hidden;">
			<div style="border-bottom: solid 3px #8E846B;">
				<div class="easyui-panel" style="background-color: #FEF8E4; color: #3F0D13; padding-top: 10px; border: 0px;">

					<div id="logo" style="float: left; display: inline-block">
						<a href="{{url('/dashboard')}}">
							<img src="{{asset('easyui/themes/icons/mmm.png')}}" height="35" />
						</a>
					</div>

					<div style="float: left; display: inline-block">
						<a href="{{url('/dashboard')}}"  class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-dashboard'">Dashboard</a>
						<a class="easyui-menubutton" data-options="menu:'#mm1',iconCls:'icon-pp'">Participants</a>
						<a class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-mypage'">My Page</a>
						<a href="{{ url('/mavro') }}" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-mavro'">Mavro</a>
						<a href="{{ url('/accounts') }}" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-account'">Account</a>
					</div>
						<a onclick="window.location.replace('{{url('logout')}}')" class="easyui-linkbutton" style="float: right" data-options="plain:true,iconCls:'icon-logout'">Logout</a>
						<a href="#" class="easyui-menubutton" style="float: right" data-options="menu:'#mm3',iconCls:'icon-help'">Information & news</a>
						<a href="{{ url('/support') }}" class="easyui-linkbutton" style="float: right" data-options="plain:true,iconCls:'icon-support'">Support</a>
				</div>
				<div id="mm1" style="width:200px;">
					<div href="{{url('/participants')}}" data-options="iconCls:'icon-pp'">Participants</div>
					<div id="referals" href="{{url('/referals')}}" data-options="iconCls:'icon-pp'">Referral</div>
					<div class="menu-sep"></div>
					<div data-options="iconCls:'icon-edit'">Add Participants</div>
				</div>
				<div id="mm2" style="width:200px;">
					<div href="{{ url('/profile') }}" data-options="iconCls:'icon-mypage'">My Page</div>
					<div data-options="iconCls:'icon-letter'">My letter of happiness</div>

				</div>
				<div id="mm3" style="width:200px;">
					<div href="{{url('/news')}}" data-options="iconCls:'icon-tip'">System News</div>
					<div data-options="iconCls:'icon-mypage'">Registration</div>

				</div>
			</div>

        </div>

        <div>&nbsp;</div>
		<div>&nbsp;</div>





	@yield('content')


	<script type="text/javascript" src="{{ asset('easyui/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('easyui/jquery.easyui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('easyui/jquery.formtowizard.js')}}"></script>
	<script type="text/javascript" src="{{asset('easyui/easyloader.js')}}"></script>
	@yield('scripts')


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | MMM UNION</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="{{asset('easyui/themes/default/easyui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('easyui/themes/icon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
	{{-- <script type="text/javascript">
	    document.onmousedown=disableclick;
	    status="Right Click Disabled";
	    function disableclick(event)
	    {
	      if(event.button==2)
	       {
	        // alert(status);
	         return false;    
	        }
	    }
	</script> --}}
	@yield('stylesheets')

</head>

	<body class="easyui-layout bg" id="layoutcc">
	<div class="loader" style="background: url({{asset('loader.gif')}}) 50% 50% no-repeat #404040;"></div>

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
					<div style="float: right; display: inline-block">
						<a href="{{ url('/messages') }}" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-inbox'">0</a>
						<a href="{{ url('/support') }}" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-support'">Support</a>
						<a href="#" class="easyui-menubutton" data-options="menu:'#mm3',iconCls:'icon-help'">Information & news</a>
						<a onclick="window.location.replace('{{url('logout')}}')" class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-logout'">Logout</a>
					</div>

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

	<script type="text/javascript">
		$('.loader').fadeOut('slow');
	</script>
</body>
</html>
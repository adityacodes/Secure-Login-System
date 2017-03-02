<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{asset('easyui/themes/default/easyui.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('easyui/themes/icon.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

		@yield('stylesheets')
	</head>
	<body>
		@yield('content')

		<script type="text/javascript" src="{{ asset('easyui/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{asset('easyui/jquery.easyui.min.js')}}"></script>
		@yield('scripts')
	</body>
</html>
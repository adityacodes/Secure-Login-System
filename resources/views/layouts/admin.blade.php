<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" href="{{asset('favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title') | MMM-UNION</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/paper-dashboard.css')}}" rel="stylesheet"/>
    <link href="{{asset('admin/css/demo.css')}}" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('admin/css/themify-icons.css')}}" rel="stylesheet">
    <style type="text/css">
        [type="date"] {
          background:#fff url('{{asset('img/calender.png')}}')  97% 50% no-repeat ;
        }
        [type="date"]::-webkit-inner-spin-button {
          display: none;
        }
        [type="date"]::-webkit-calendar-picker-indicator {
          opacity: 0;
        }
        input {
          border: 1px solid #c4c4c4;
          border-radius: 5px;
          background-color: #fff;
          padding: 3px 5px;
          box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
          width: 190px;
        }
    </style>

    @yield('stylesheets')

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{url('adminpanel')}}" class="simple-text">
                    {{Auth::user()->name}}
                </a>
            </div>
            <ul class="nav">
                <li class="{{Request::is('adminpanel')? "active" : ""}}">
                    <a href="{{url('adminpanel')}}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{Request::is('admin/support')? "active" : ""}}">
                    <a href="{{url('admin/support')}}">
                        <i class="ti-user"></i>
                        <p>Support</p>
                    </a>
                </li>
                <li class="{{Request::is('admin/assignments')? "active" : ""}}">
                    <a href="{{url('admin/assignments')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Assignments</p>
                    </a>
                </li>
                <li class="{{Request::is('admin/orders')? "active" : ""}}">
                    <a href="{{url('admin/orders')}}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Orders</p>
                    </a>
                </li>

                <li class="{{Request::is('admin/news')? "active" : ""}}">
                    <a href="{{url('admin/news')}}">
                        <i class="ti-bell"></i>
                        <p>News</p>
                    </a>
                </li>

                <li class="{{Request::is('admin/users')? "active" : ""}}">
                    <a href="{{url('admin/users')}}">
                        <i class="ti-user"></i>
                        <p>All Users</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('title')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{url('logout')}}" class="dropdown-toggle">
                                <i class="ti-panel"></i>
								<p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
            	@yield('content')
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.globaltechpromoters.com">GTP</a>
                </div>
            </div>
        </footer>
    </div>
</div>


</body>

    <script src="{{asset('admin/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin/js/bootstrap-checkbox-radio.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap-notify.js')}}"></script>
	<script src="{{asset('admin/js/paper-dashboard.js')}}"></script>
	<script src="{{asset('admin/js/demo.js')}}"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
        	// $.notify({
         //    	icon: 'ti-gift',
         //    	message: "Welcome to <b>User Panel</b> - a beautiful Bootstrap freebie for your next project."

         //    },{
         //        type: 'success',
         //        timer: 4000
         //    });
    	});
	</script>
	@yield('scripts')

</html>

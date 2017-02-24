@extends('layouts.app')

@section('title', 'LOGIN')

@section('stylesheets')

<style type="text/css">
    .wrapper{
        margin-top: 15%;
    }
    .panel-body{
        border: 5px solid #CC8822;
        border-radius: 10px;
    }
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        opacity: 0.8;
        background: url({{asset('loader.gif')}}) 50% 50% no-repeat #404040;
    }
</style>

@endsection

@section('content')

    <div class="loader"></div>

<div class="wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">

                    <div class="panel-body">

                        <h2 class="text-center">
                            <img src="{{asset('easyui/themes/icons/mmm.png')}}">Login to system
                        </h2>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address:
                                
                            </label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    <small id="passwordHelpInline" class="text-muted">
                                      <em>(for example: example@gmail.com)</em>
                                    </small>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password:</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group" hidden="">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" style="background: darkorange;">
                                     Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection

@section('scripts')

<script type="text/javascript">


    /*$(window).load(function() {
        $(".loader").delay( 2000 ).fadeOut("slow");
        $(":input").delay( 2000 ).prop( "disabled", false );
    });*/

    $('.loader').fadeOut('slow');
    
    $('#app-layout').css("background-color", "#F2E5D2"); 

</script>

@endsection
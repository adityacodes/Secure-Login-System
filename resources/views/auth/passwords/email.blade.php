@extends('layouts.app')

@section('title', 'RESET PASSWORD')

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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2 class="text-center"> <img src="http://placehold.it/72x40&text=Logo">Reset Password</h2>
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                            </button>
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


    $(window).load(function() {
        $(".loader").delay( 5000 ).fadeOut("slow");
        $(":input").delay( 5000 ).prop( "disabled", false );
    });
    
    $('#app-layout').css("background-color", "#F2E5D2"); 

</script>

@endsection

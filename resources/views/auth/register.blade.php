@extends('layouts.app')

@section('title', 'REGISTER')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">You may register by filling in the form below :</div>
                <div class="panel-body well">
                    @if(Session::has('success'))
                        <h5>{{Session::get('success')}}</h5>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label pull-left ">Name <sup style="color:red;">*</sup><br>
                            <small id="passwordHelpInline" class="text-muted">
                              <em>(a nick name is possible)</em>
                            </small>
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address <sup style="color:red;">*</sup><br>
                            <small id="passwordHelpInline" class="text-muted">
                              <em>(for example: example@gmail.com)</em>
                            </small>
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">Mobile Number<sup style="color:red;">*</sup><br>
                            <small id="passwordHelpInline" class="text-muted">
                              <em>(for example, +2347030123456)</em>
                            </small>
                            </label>
                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('referal') ? ' has-error' : '' }}">
                            <label for="referal" class="col-md-4 control-label">Referal ID <span class="text-muted"><em>(optional)</em></span><br>
                                <small id="passwordHelpInline" class="text-muted">
                                      <em>(ATTENTION! If you were invited by other participant, you should specify here the e-mail address of his/her account)</em>
                                    </small>



                            </label>

                            <div class="col-md-6">
                                <input id="referal" type="text" class="form-control" name="referal" value="{{ old('referal') }}">

                                @if ($errors->has('referal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('referal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password <sup style="color:red;">*</sup><br>
                            
                            </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password <sup style="color:red;">*</sup><br>
                            <small id="passwordHelpInline" class="text-muted">
                              <em>(re-enter your password)</em>
                            </small>
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('captcha_code') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Picture Password <sup style="color:red;">*</sup><br>
                                <small id="passwordHelpInline" class="text-muted">
                                  <em>(Enter the code from the picture)</em>
                                </small>
                            </label>
                            <div class="col-md-4">
                                <img width="120" height="40" src="" id='captchaimg'>
                            </div>

                            <div class="col-md-6">
                                <input class="form-control" id="captcha_code" name="captcha_code" type="text">
                                @if ($errors->has('captcha_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-sm btn-default" type="button" id="reloadcaptcha"><i class="fa fa-btn fa-refresh"></i>RELOAD</button>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('toa') ? ' has-error' : '' }}">
                          <div class="col-md-offset-4 col-md-6">
                                 @if ($errors->has('toa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('toa') }}</strong>
                                    </span>
                                @endif  
                              <label class="control-label">
                               
                                <input type="checkbox" class="form-check-input" id="checkboxSuccess" name="toa">
                                 Having read the WARNING , I am well aware fully of the risks. Being in sound mind, I have decided to become a member of MMM.
                              </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-block btn-lg">
                                    <i class="fa fa-btn fa-user"></i> REGISTER
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script type="text/javascript">  
            
    

    $(document).ready(function(){
        function  captchaload()
        {   
            var token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{ url('/captcha') }}',
                type: 'PUT',
                data: "_token=" + token, 
                success: function(result){
                        var obj = $.parseJSON(result);
                        $("#captchaimg").attr('src', obj.imgsrc);
                        console.log(obj.imgsrc);
                    }
            });
        }

        captchaload();

        $('#reloadcaptcha').click(function(){
            captchaload();
        });
    });


</script>


@endsection


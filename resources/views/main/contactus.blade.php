@extends('layouts.app')

@section('title', 'CONTACT US')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body well">
                    @if(Session::has('success'))
                        <h5>{{Session::get('success')}}</h5>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact-us') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('theme') ? ' has-error' : '' }}">
                            <label for="theme" class="col-md-4 control-label pull-left ">Theme <sup style="color:red;">*</sup>
                            
                            </label>

                            <div class="col-md-6">
                                <select name="theme" class="form-control">
                                    <option value="1">I am new here. Contact me.</option>
                                    <option value="2">I want to change my phone in PO.</option>
                                    <option value="3">Letter to Administration</option>
                                </select>
                                @if ($errors->has('theme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('theme') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Text Message <sup style="color:red;">*</sup> :
                            </label>

                            <div class="col-md-6">
                                <textarea id="message" rows="5" style="resize: vertical;" name="message" class="form-control">{{ old('message') }}</textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label pull-left ">Status <sup style="color:red;">*</sup>
                            
                            </label>

                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="0">Non-Member</option>
                                    <option value="1">Member</option>
                                </select>
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
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

                        <div class="form-group{{ $errors->has('skype') ? ' has-error' : '' }}">
                            <label for="skype" class="col-md-4 control-label pull-left ">Skype :
                            </label>

                            <div class="col-md-6">
                                <input id="skype" type="text" class="form-control" name="skype" value="{{ old('skype') }}">

                                @if ($errors->has('skype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('skype') }}</strong>
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
                            <div class="col-md-4" id="captchaimg">

                                    {!! captcha_image_html('RegisterCaptcha') !!}


                            </div>

                            <div class="col-md-offset-4 col-md-4">
                                <input class="form-control" id="captcha_code" name="captcha_code" type="text">
                                @if ($errors->has('captcha_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('captcha_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-block btn-lg">
                                    <i class="fa fa-btn btn-block"></i> SUBMIT
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
                url: '{{ url('captcha') }}',
                type: 'PUT',
                data: "_token=" + token, 
                success: function(result){
                        $("#captchaimg").attr('src', result);

                        console.log(result);
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


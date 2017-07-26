@extends('layouts.web')
@section('title', 'Login')
@section('content')
<div class="container-fluid">
    <div class="row breadcrumb">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <div class="row">
                    <nav class="breadcrumb-nav">
                        <a class="breadcrumb-item" href="{{route('home')}}">Home</a>
                        <a class="breadcrumb-item" href="{{route('login')}}">Login</a>
                    </nav>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row contact">
        <p class="wlcm-text text-center">If you need any help, please contact us or send us an email or go to our forum <br><br>
            We are sure that you can receive our reply as soon as possible.  </p>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form style="margin:0 auto; width:50%; margin-top:30px;" method="POST" class="user-input text-center" role="form"action="{{ route('login') }}">
                {{ csrf_field() }}
                <label>Email</label>
                <input type="text" name="email"  placeholder="Email" required value="{{old("email")}}" />

                    @if ($errors->has('email'))
                    <span class="help-block col-md-12">
                        <b class="error-msg">{{ $errors->first('email') }}</b>
                    </span>
                    @endif
                    <label>password</label>
                <input type="password" name="password" value="" />
                <button type="submit" class="btn btn-lg btn-default form-btn">Submit</button>
            </form>
        </div>

    </div>
</div>
<div class="container-fluid" style=" margin-top:100px;">
</div>
<div class="container" style="display: none;">
    <div class="row">
        <h1>Login</h1>
        <div class="col-md-12 login-input">	
            <form  method="POST" class="user-input text-center" role="form"action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input type="email" name="email"  placeholder="Email" required value="{{old("email")}}" />

                    @if ($errors->has('email'))
                    <span class="help-block col-md-12">
                        <b class="error-msg">{{ $errors->first('email') }}</b>
                    </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                    <span class="help-block error-msg">
                        <b class="error-msg">{{ $errors->first('password') }}</b>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-lg btn-default form-btn">Login</button>
                <div class="remember-me">
                    <div class="pull-left">
                        <input type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}>
                               <i>Remember Me</i>
                    </div>
                    <!--<a href="{{ route('password.request') }}" class="forget-ps pull-right"><i>Forgot Password</i></a>-->
                    <a href="{{route("forgotpassword")}}" class="forget-ps pull-right"><i>Forgot Password</i></a>
                </div>
                <div class="remember-me">
                    <div>
                        <i>If You Do Not Have an Account? click <a href="{{route("register")}}">here</a> to Register Now</i>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
        </div>
    </div>
    <div class="col-xs-12 break"></div>
</div>
@endsection
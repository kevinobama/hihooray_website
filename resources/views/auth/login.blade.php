@extends('layouts.app')

@section('content')

        <!-- resources/views/auth/login.blade.php -->

<div class="login-form">
    <div class="login-content">
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        <form class="form-horizontal" method="post" role="form" id="form_login" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control" name="telephone" id="username" placeholder="Telephone" autocomplete="off" value="{{ old('telephone') }}"/>
                    @if ($errors->has('telephone'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                    @endif
                </div>

            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                    </div>

                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" value=""/>
                    @if ($errors->has('upassword'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-login">
                    <i class="fa fa-sign-in"></i>
                    Login In
                </button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
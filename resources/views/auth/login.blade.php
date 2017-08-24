@extends('layouts.login')
@section('content')
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    <input id="password" type="password" class="form-control" name="password">
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection






















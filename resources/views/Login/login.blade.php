@extends('components.layout')
@section('addCss')

@section('title', 'MANEB')
@section('content')

<body>
    <div class="log-incontainer">
        <div class="company-logo-right">
            <div class="comp-logo">
                <img src="{{asset('asset/images/maneB.jpg')}}" alt="">
            </div>
        </div>

        <div class="login-admin">
            <p class="log-in-in-word">Login</p>
            <p class="login-text-small">Track exams for securely.</p>
            <div class="log-in-textbox">

                <div class="input-boxes">
                    <img src="{{asset('asset/images/mail.png')}}" alt="">
                    <input type="text" name="username" class="input-user" placeholder="Username">
                </div>
                <div class="input-boxes">
                    <img src="{{asset('asset/images/padlock.png')}}" alt="">
                    <input type="password" name="password" class="input-user" placeholder="Password">
                </div>
                <p class="forget-password"><a href="#">forgot password?</a></p>
                <input type="button" value="log in" class="login-btn">
            </div>
        </div>
    </div>
</body>

@endsection
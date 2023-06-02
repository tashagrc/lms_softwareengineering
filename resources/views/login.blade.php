@extends('layouts.navbarOne')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/loginStyle.css') }}" rel="stylesheet">
</head>
<body>

@section('container')
<div class="container">
    <div class="row">
        <div class="col-left">
            <img src="img/loginImg.png" class ="img-login">
        </div>
        <div class="col-right">
            <form action="/login" method="post">
                @csrf
                <div class="form">
                    <p class ="headingLogin"> Login </p>
                    @if(session()->has('loginError'))
                        <div class = "flash mt-3 flash-warn">
                            Login failed!
                        </div>
                    @endif
                    <div class="form-login">
                        <div class="spaceInput">
                            <label class ="lblEmail"> Email address </label>
                            <input type="email" id="UserEmail" name ="UserEmail" class = "lengthBox" autocomplete="off" autofocus required value="{{ old('UserEmail') }}">
                            @error('UserEmail')
                                <p id="valEmail">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="spaceInput">
                            <div class="sectionPass">
                                <label class="lblPassword"> Password </label>
                                <label class="lblChangePassword"> Forgot Password? </label>
                            </div>
                            <input type="password" id="UserPassword" name ="UserPassword" class = "lengthBox" autocomplete="off" required>
                            @error('UserEmail')
                                <p class="error-message">{{ $message }}</p>
                            @enderror

                            @error('UserPassword')
                                <p class="error-message">{{ $message }}</p>
                            @enderror

                            @error('login_failed')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <a> <button class="sbtLogin"> Login </button> </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/login.js"></script>
</body>
</html>
@endsection


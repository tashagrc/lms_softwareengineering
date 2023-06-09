@extends('layouts.navbarRegister')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/regisStyle.css') }}" rel="stylesheet">
</head>
<body>

@section('container')
<div class="container">
  <div class="row">
    <div class="col-left">
      <img src="img/regisImg.png" class ="img-register">
    </div>
    <div class="col-right">
        <form action="/register" method="post">
            @csrf
            <div class="form">
                <p class ="headingSign"> Sign Up </p>
                <div class="form-login">
                    <div class="spaceInput">
                        <label class ="lbl"> Name </label>
                        {{-- Version 1 --}}
                        {{-- <input type="text" id="UserName" name ="UserName" class = "lengthBox" autocomplete="off"> --}}
                        {{-- <p id="valName">*Name can't contain special characters </p> --}}

                        {{-- Version 2 --}}
                        <input type="text" id="UserName" name ="UserName" class = "lengthBox" autocomplete="off" required value="{{ old('UserName') }}">
                        @error('UserName')
                            <p id="valName"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="spaceInput">
                        <label class ="lbl"> Email address </label>
                        {{-- <input type="text" id="UserEmail" name ="UserEmail" class = "lengthBox" autocomplete="off">
                        <p id="valEmail">*Email must contain @ and ends with .com </p> --}}

                        <input type="text" id="UserEmail" name ="UserEmail" class = "lengthBox" autocomplete="off" required value="{{ old('UserEmail') }}">
                        @error('UserEmail')
                            <p id="valEmail"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="spaceInput">
                        <label class ="lbl"> Password </label>
                        {{-- <input type="password" id="UserPassword" name ="UserPassword" class = "lengthBox" autocomplete="off">
                        <p id="valPass">*Password must contain at least one uppercase letter, one lowercase letter, one number and one special character</p> --}}
                        <input type="password" id="UserPassword" name ="UserPassword" class = "lengthBox" autocomplete="off" required>
                        @error('UserPassword')
                            <p id="valPass"> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="spaceInput">
                        <label class ="lbl"> Confirm Password </label>
                        <input type="password" id="UserCPass" name ="UserCPass" class = "lengthBox" autocomplete="off" required>
                        <p id="valCPass">*The confirmed password does not match the entered password. </p>
                    </div>
                </div>
                <div>
                    <a> <button class="sbtRegis"> Sign Up </button> </a>
                </div>
            </div>
        </form>
    </div>
    <script src="js/register.js"></script>
@endsection
</body>
</html>
@endsection


@extends('layouts.navbarRegister')

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
          <div class="form">
              <p class ="headingLogin"> Login </p>
              <div class="form-login">
                  <div class="spaceInput">
                      <label class ="lblEmail"> Email address </label>
                      <input type="email" id="email" name ="email" class = "lengthBox" autocomplete="off">
                      <p id="valEmail">*Invalid Email</p>
                  </div>
                  <div class="spaceInput">
                      <div class="sectionPass">
                          <label class="lblPassword"> Password </label>
                          <label class="lblChangePassword"> Forgot Password? </label>
                      </div>
                      <input type="password" id="password" name ="password" class = "lengthBox" autocomplete="off">
                      <p id="valPass">*Invalid Password</p>
                  </div>
              </div>
              <div>
                  <a> <button class="sbtLogin"> Login </button> </a>
              </div>
          </div>
      </div>
    </div>
  </div>
      <script src="js/login.js"></script>
  </body>
  </html>
@endsection


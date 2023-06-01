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

<nav>
  <div class="logo">
    <img src="{{ asset('img/logoReadRacoon.png') }}" alt="description of myimage">
  </div>
  <div class="buttons">
    <button class="regis">Register</button>
    <button class="login">Login ></button>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-left">
      <img src="img/regisImg.png" class ="img-register">
    </div>
    <div class="col-right">
        <div class="form">
            <p class ="headingSign"> Sign Up </p>
            <div class="form-login">
                <div class="spaceInput">
                    <label class ="lbl"> Name </label>
                    <input type="text" id="name" name ="name" class = "lengthBox" autocomplete="off">
                </div>
                <div class="spaceInput">
                    <label class ="lbl"> Email address </label>
                    <input type="text" id="name" name ="name" class = "lengthBox" autocomplete="off">
                </div>
                <div class="spaceInput">
                    <label class ="lbl"> Password </label>
                    <input type="password" id="name" name ="name" class = "lengthBox" autocomplete="off">
                </div>
                <div class="spaceInput">
                    <label class ="lbl"> Confirm Password </label>
                    <input type="password" id="name" name ="name" class = "lengthBox" autocomplete="off">
                </div>
            </div>
            <div>
                <a> <button class="sbtRegis"> Sign Up </button> </a>
            </div>
        </div>
    </div>



      {{-- <div class="img-chat1">
        <p>The LMS literature app revolutionized my approach to literature, offering a comprehensive collection of texts and interactive features that deepened my knowledge and fostered my love for reading</p>
        <img src="{{ asset('img/chatimg1.png') }}" alt="description of myimage">
      </div>
      <div class="img-chat2">
        <img src="{{ asset('img/chatimg2.png') }}" alt="description of myimage">
        <p>Literacy with games just makes it more fun to comprehend and engaging for further reading. I am overall eager to read more beyond lessons!</p>
      </div> --}}
    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
</body>
</html>

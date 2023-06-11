<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>

<nav>
  <div class="logo">
    <a href="/"> <img src="{{ asset('img/logoReadRacoon.png') }}" alt="description of myimage"> </a>
  </div>
  <div class="buttons">
    <button class="regis"> <a href="/register">  Register </a> </button>
    <button class="login"> <a href="/login"> Login > </a> </button>
  </div>
</nav>

<div class="container-sm">
  <div class="row">
        <div class="col">
            <h2>Literacy starts</h2>
            <div class="from-pas">
                <h1 class="fw-bold">from</h1>
                <h1 class="warna-pas fw-bold">PASSION</h1>
            </div>
            <button class="read-now"> <a href="/login"> Read now</a></button>
        </div>
        <div class="col">
            <div class="img-chat1">
                <p>The LMS literature app revolutionized my approach to literature, offering a comprehensive collection of texts and interactive features that deepened my knowledge and fostered my love for reading</p>
                <img src="{{ asset('img/chatimg1.png') }}" alt="description of myimage">
            </div>
            <div class="img-chat2">
                <img src="{{ asset('img/chatimg2.png') }}" alt="description of myimage">
                <p>Literacy with games just makes it more fun to comprehend and engaging for further reading. I am overall eager to read more beyond lessons!</p>
            </div>
        </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
</body>
</html>

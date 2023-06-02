<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('/css/navbarOne.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
          <a href="/"> <img src="{{ asset('img/logoReadRacoon.png') }}" alt="description of myimage"> </a>
        </div>
        <div class="text-row">
            <div class="black-text">
                <p>Already have an account?</p>
            </div>
            <div class="red-text">
                <a href="/login"><p>Login here</p></a>
            </div>
        </div>
      </nav>
      <div>
        @yield('container')
      </div>
</body>
</html>

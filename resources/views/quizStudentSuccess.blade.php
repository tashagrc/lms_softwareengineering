@extends('layouts.navbarTwoForStudent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
    <link rel="stylesheet" href="{{ asset('/css/quizAnswer.css') }}">
</head>
<body>
    @section('title')
    <b>{{$quiz['QuizTitle']}}</b>
    @endsection

@section('container')

</body>
</html>
    <div class="center">
        <img src="{{ asset('img/success.svg') }}" alt="success image" class="img-success">
        <h3>Congratulation {{$user["UserName"]}} &#10024;<br>for completing {{$quiz["QuizTitle"]}}</h3>
        <div class="xp-container">
            <img src="{{ asset('img/star-xp.svg') }}" alt="star icon" class="star-xp">
            <p class="text-xp">+ {{$xp}} xp</p>
        </div>
        <a href="{{url('/dashboard')}}" class="dashboard-link">Back to dashboard</a>

    </div>

</body>
</html>
@endsection

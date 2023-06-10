@extends('layouts.navbarTwo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

    @section('title')
    <b>Quiz</b>
    @endsection

@section('container')

</body>
</html>
    @foreach($quizzes as $q)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">{{$q['ClassroomName']}} </h6>
            <h5 class="card-title">{{$q['QuizTitle']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$q['CourseName']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$q['QuizDate']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">{{ \Carbon\Carbon::parse($q['QuizEnd'])->diffInMinutes(\Carbon\Carbon::parse($q['QuizStart'])) }} min</h6>
            @if($q['StatusPlayed'] == true)
                <h6 class="card-subtitle mb-2 text-muted">{{$q['QuizScore']}} </h6>
            @else
                <a href="{{url('quizList/quizDetails', $q->QuizID)}}" class="card-link">Play</a>
            @endif

        </div>
    </div>
    @endforeach

</body>
</html>
@endsection




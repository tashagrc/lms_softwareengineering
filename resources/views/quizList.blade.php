{{-- @extends('layouts.navbarFour')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
</head>
<body>

@section('container') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

</body>
</html>
    @foreach($quizzes as $q)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$q['QuizID']}}</h5>
            <h5 class="card-title">{{$q['QuizTitle']}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Classroom name {{$q['ClassroomName']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">Course name {{$q['CourseName']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">Quiz Date {{$q['QuizDate']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">Quiz Start {{$q['QuizStart']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">Quiz End {{$q['QuizEnd']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">Quiz Score {{$q['QuizScore']}} </h6>
            <h6 class="card-subtitle mb-2 text-muted">Status Played{{$q['StatusPlayed']}} </h6>
            <a href="{{url('quiz/quizDetails', $q->QuizID)}}" class="card-link">Play</a>
        </div>
    </div>
    @endforeach





{{-- </body>
</html>
@endsection --}}




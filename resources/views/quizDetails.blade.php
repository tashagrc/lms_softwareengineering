@extends('layouts.navbarTwo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
</head>
<body>

    @section('title')
    <b>{{$quiz['QuizTitle']}}</b>
    @endsection
@section('container')

</body>
</html>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5>Class: {{$quiz['ClassroomName']}}</h5>
            <h5>Subject: {{$quiz['CourseName']}}</h5>
            <h5>Topic: {{$quiz['SessionTopic']}}</h5>
            <h5>Quiz Name: {{$quiz['QuizTitle']}}</h5>
            <h5>Date: {{$quiz['QuizDate']}}</h5>
            <h5>Time: {{$quiz['QuizStart']}} {{$quiz['QuizEnd']}}</h5>
            <h5>Total question: {{$totalQuestion}}</h5>
        </div>
    </div>

    <div>
        <h1>Informations</h1>
        <h5>{{$quiz['QuizPrepare']}}</h5>
    </div>

    <div>
        <a href="{{url('answer', $quiz['QuizID'])}}" class="link">Play</a>
    </div>
</body>
</html>
@endsection

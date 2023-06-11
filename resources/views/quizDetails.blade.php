@extends('layouts.navbarTwoForStudent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/quizAnswer.css') }}">
</head>
<body>

    @section('title')
    <b>{{$quiz['QuizTitle']}}</b>
    @endsection
@section('container')

</body>
</html>
    <div class="card" style="width: 70vw">
        <div class="card-body">
            <table class="table">
                <tr>
                  <td><b>Class</b></td>
                  <td>{{$quiz['ClassroomName']}}</td>
                </tr>
                <tr>
                  <td><b>Subject</b></td>
                  <td>{{$quiz['CourseName']}}</td>
                </tr>
                <tr>
                  <td><b>Topic</b></td>
                  <td>{{$quiz['SessionTopic']}}</td>
                </tr>
                <tr>
                  <td><b>Quiz Name</b></td>
                  <td>{{$quiz['QuizTitle']}}</td>
                </tr>
                <tr>
                  <td><b>Date</b></td>
                  <td>{{$quiz['QuizDate']}}</td>
                </tr>
                <tr>
                  <td><b>Time</b></td>
                  <td>{{date('H:i', strtotime($quiz['QuizStart']))}} - {{date('H:i', strtotime($quiz['QuizEnd']))}}</td>
                </tr>
                <tr>
                  <td><b>Total question</b></td>
                  <td>{{$totalQuestion}}</td>
                </tr>
            </table>
        </div>
    </div>

    <h5 class="info-title">Informations</h5>
    <div class="row">
        <div class="col-md-8">
          <div class="card border-0 bg-card" style="width: 18rem;">
            <div class="card-body" style="width:50vw">
              <h5 class="text-prepare">{{$quiz['QuizPrepare']}}</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-right">
          <a href="{{url('answer', $quiz['QuizID'])}}" class="card-link">
            <img src="{{ asset('img/play_button.png') }}" alt="play icon" style="width:50px">
          </a>
        </div>
    </div>





</body>
</html>
@endsection

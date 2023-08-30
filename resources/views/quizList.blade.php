@extends('layouts.navbarTwoForStudent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon | LMS</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/quizAnswer.css') }}">
</head>
<body>

    @section('title')
    <b>Quiz</b>
    @endsection

@section('container')

</body>
</html>
<div class="container mx-auto">
    <div class="row">
      @foreach($quizzes as $q)
      <div class="col-md-4 card-container">
        <div class="card mb-3 p-3">
            <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <h6 class="card-subtitle mb-2 text-muted">{{$q['ClassroomName']}} </h6>
                    <h3 class="card-title text-gray fw-bold mb-3">{{$q['QuizTitle']}}</h3>

                    <div class="row align-items-center mb-2">
                        <div class="col-auto d-flex align-items-center">
                            <span class="badge text-dark d-flex">
                                <img src="{{ asset('img/course.png') }}" alt="book icon" style="width:20px;height:20px"class="me-2">
                                <h6 class="text-muted m-0">{{$q['CourseName']}} </h6>
                            </span>
                        </div>
                      </div>

                      <div class="row align-items-center">
                        <div class="col-auto d-flex align-items-center">
                            <span class="badge text-dark d-flex align-items-center">
                                <img src="{{ asset('img/time.svg') }}" alt="time icon" class="me-2">
                                <h6 class="card-subtitle text-muted">{{$q['QuizDate']}} &#x2022; {{ \Carbon\Carbon::parse($q['QuizEnd'])->diffInMinutes(\Carbon\Carbon::parse($q['QuizStart'])) }} mins</h6>
                            </span>
                        </div>
                      </div>


                  </div>
                  <div class="col-4 text-right d-flex flex-column justify-content-center align-items-end">
                    @if($q['StatusPlayed'] == true)
                        <h6 class="card-subtitle mb-2 text-muted">Score</h6>
                        <h1 class="card-subtitle mb-2 text-danger fw-bold">{{$q['QuizScore']}} </h1>
                    @else
                    <a href="{{url('quizList/quizDetails', $q->QuizID)}}" class="card-link">
                        <img src="{{ asset('img/play_button.png') }}" alt="play icon" style="width:50px">
                    </a>

                    @endif
                  </div>
                </div>
            </div>

        </div>
      </div>
      @endforeach
    </div>
  </div>



</body>
</html>
@endsection




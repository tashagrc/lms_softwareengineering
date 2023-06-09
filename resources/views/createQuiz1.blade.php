@extends('layouts.nav44rTwo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/createQuiz1Style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

@section('container')
    <div class="content-middle">
        <div class="steps">
            <div class="step-layout">
                <a href="" class="step-layout-button-diff" id="first-step">
                    <p class="spacing" id="number1">1</p>
                    <p class="spacing" id="desc1">Class</p>
                </a>
                <p class="spacing" id="arrow-diff">></p>
            </div>
            <div class="step-layout">
                <div class="step-layout-button" id="second-step">
                    <p class="spacing" id="number2">2</p>
                    <p class="spacing" id="desc2">Subject</p>
                </div>
                <p class="spacing" id="arrow">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button" id="third-step">
                    <p class="spacing" id="number3">3</p>
                    <p class="spacing" id="desc3">Topic</p>
                </div>
                <p class="spacing" id="arrow">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button" id="fourth-step">
                    <p class="spacing" id="number4">4</p>
                    <p class="spacing" id="desc4">Information</p>
                </div>
                <p class="spacing" id="arrow">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button" id="fifth-step">
                    <p class="spacing" id="number5">5</p>
                    <p class="spacing" id="desc5">Questions</p>
                </div>
                <p class="spacing" id="arrow">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button" id="sixth-step">
                    <p class="spacing" id="number6">6</p>
                    <p class="spacing" id="desc6">Upload</p>
                </div>
            </div>
        </div>
        <div class="content">
            <h1 class="content-title">Select class</h1>
            <div class="content">
                <div class="dropdown">
                    <button class="dropdown-button">Select</button>
                    <div class="dropdown-content">
                        @foreach ($classes as $class)
                            <a href="" data-value="{{ $class['ClassroomName'] }}">{{ $class["ClassroomName"] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="action-button">
            <button class="savecontinue"><a href="{{ route('createQuiz2', ['clickedValue' => $class['ClassroomID']]) }}">{{ $class['ClassroomName'] }}</a>
            </button>
        </div>
    </div>

</body>
</html>
@endsection

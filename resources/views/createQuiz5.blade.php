@extends('layouts.navbarTwoForTeacher')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/createQuiz5Style.css') }}" rel="stylesheet">
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
                <div class="step-layout-button-diff" id="second-step">
                    <p class="spacing" id="number2">2</p>
                    <p class="spacing" id="desc2">Subject</p>
                </div>
                <p class="spacing" id="arrow-diff">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button-diff" id="third-step">
                    <p class="spacing" id="number3">3</p>
                    <p class="spacing" id="desc3">Topic</p>
                </div>
                <p class="spacing" id="arrow-diff">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button-diff" id="fourth-step">
                    <p class="spacing" id="number4">4</p>
                    <p class="spacing" id="desc4">Information</p>
                </div>
                <p class="spacing" id="arrow-diff">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button-diff" id="fifth-step">
                    <p class="spacing" id="number5">5</p>
                    <p class="spacing" id="desc5">Questions</p>
                </div>
                <p class="spacing" id="arrow-diff">></p>
            </div>
            <div class="step-layout">
                <div href="" class="step-layout-button" id="sixth-step">
                    <p class="spacing" id="number6">6</p>
                    <p class="spacing" id="desc6">Upload</p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-wrap">
                <div class = "end-to-end">
                    <h1> Questions </h1>
                    <div class="right">
                        <p class="textTotalQuestion"> Total quetions: </p>
                        {{-- Isi Data --}}
                    </div>
                </div>
                <div class="spaceInput">
                    <div class="label">
                        <div class="horizontal">
                            <p> Article </p>
                            <p class="warna-pas">*</p>
                        </div>
                    </div>
                    <textarea id="QuizArticle" name="QuizArticle" rows="6" class="lengthBox2"></textarea>

                </div>
                <div class="spaceInput">
                    <div class="label">
                        <div class="horizontal">
                            <p> Add Questions </p>
                            <p class="warna-pas">*</p>
                        </div>

                    </div>
                    <input type="text" id="QuizName" name ="QuizName" class = "lengthBox" autocomplete="off" required>
                </div>
            </div>
            </div>

        </div>
        <div class="action-button">
            {{-- <button class="savecontinue"><a href="{{ route('createQuiz2', ['clickedValue' => $class['ClassroomID']]) }}">{{ $class['ClassroomName'] }}</a>
            </button> --}}
        </div>
    </div>

</body>
</html>
@endsection

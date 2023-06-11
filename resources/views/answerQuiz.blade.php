@extends('layouts.navbarTwo')

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
    <b>{{$article['QuizTitle']}}</b>
    @endsection

@section('container')
    <h1>{{$article['SessionTopic']}}</h1>
    <p style="margin-bottom:10vh">{{$article['QuizArticle']}}</p>

    <form action="{{ route('save.answers', ['QuizID' => $article->QuizID]) }}" method="POST" onsubmit="return confirm('Are you sure with your answer?');">
        @csrf
        @foreach($question as $q)
            <p class="question-title">{{ $q['QuestionTitle'] }}</p>
            <input class="text-box" type="text" name="answers[]" placeholder="Write your answer here.." required>
        @endforeach
        <br>
        <button class="save-ans" type="submit">Save and Continue</button>
    </form>

</body>
</html>
@endsection

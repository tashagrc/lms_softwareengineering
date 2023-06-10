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
    <b>Quiz</b>
    @endsection

@section('container')
    <h1>{{$article['SessionTopic']}}</h1>
    <p>{{$article['QuizArticle']}}</p>

    <form action="{{ route('save.answers', ['QuizID' => $article->QuizID]) }}" method="POST">
        @csrf
        @foreach($question as $q)
            <p>{{ $q['QuestionTitle'] }}</p>
            <input type="text" name="answers[]" required>
        @endforeach
        <button type="submit">Save and Continue</button>
    </form>

</body>
</html>
@endsection

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
    <h1>Congratulation {{$user["UserName"]}} for completing {{$quiz["QuizTitle"]}}</h1>
    <p>{{$xp}}</p>
</body>
</html>
@endsection

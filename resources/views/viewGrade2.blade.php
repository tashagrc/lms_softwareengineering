@extends('layouts.navbarTwoForStudent')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
    <link rel="stylesheet" href="/css/viewGradeStyle.css">
</head>
<body>

    @section('title')
    <b style="font-size:30px">Quiz</b>
    @endsection

@section('container')

    <table class="border-0">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Finished At</th>
                <th>Score</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @php
                $numeral = 1;
            @endphp
            @foreach($grades as $g)
                <tr class="{{ $numeral % 2 == 0 ? 'table-row-odd' : '' }}">
                    <td>{{ $numeral }}</td>
                    <td>{{ $g["QuizTitle"]}}</td>
                    <td>{{ $g["FinishedDateTime"]}}</td>
                    <td>{{$g["QuizScore"]}}</td>
                    <td><a href="{{ route('viewGradeDetail', ['id' => $g->UserId]) }}">View</a></td>
                </tr>
                @php
                    $numeral++;
                @endphp
            @endforeach
        </tbody>
    </table>
</body>
</html>

@endsection

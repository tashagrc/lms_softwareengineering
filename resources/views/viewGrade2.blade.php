<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/viewGradeStyle.css">
</head>
<body>
<h1>Student Prespective</h1>
    <table border="0">
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
                    <td>{{ $g->answer->AnswerContent}}</td>
                    <td>{{ $g->FinishedDateTime}}</td>
                    <td>{{$g->QuizScore}}</td>
                    <td><a href="{{ route('viewGradeDetail', ['id' => $g->UserId]) }}">...</a></td>
                </tr>
                @php
                    $numeral++;
                @endphp
            @endforeach
        </tbody>
    </table>
</body>
</html>
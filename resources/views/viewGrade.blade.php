@extends('layouts.navbarTwoForTeacher')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grade Summary </title>
    <link rel="stylesheet" href="/css/viewGradeStyle.css">
</head>
<body>

@section('title')
<b style="font-size: 30px">Grade</b>
@endsection

@section('container')
<div class = "filterSection">
    <form class = "class-container" method="POST" action="{{ route('process.view.grade') }}">
        @csrf
        <label class="lblClass" for="classroom">Class</label>
        <div class = "ddButton">
            <select class="ddClass" name="classroom" id="classroom">
                <option value="{{ $class->id }}" hidden="hidden" selected>{{ $class->ClassroomName }}</option>
                @foreach ($classrooms as $classroom)
                    <option value="{{ $classroom->ClassroomID}}">{{ $classroom->ClassroomName }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn-filter">Filter</button>
    </form>
</div>

<table class="table">
    <thead>
        <tr class = "titleColumn">
        <th scope="col">No</th>
        <th scope="col">Student Name</th>
        <th scope="col">Status</th>
        <th scope="col">Scores</th>
        <th scope="col">Detail</th>
        </tr>
    </thead>
    @if (isset($students))
    <tbody class="table-group-divider">
        @php
            $numeral = 1;
        @endphp
        @foreach($students as $student)
            <tr class="{{ $numeral % 2 == 0 ? 'table-row-odd' : '' }}">
                <td>{{ $numeral }}</td>
                <td>{{ $student->user->UserName}}</td>
                <td>
                    @if($student->StatusPlayed == 1)
                        Submitted
                    @elseif($student->StatusPlayed == 0)
                        Late
                    @endif
                </td>
                <td>{{$student->QuizScore}}</td>
                <td><a href="{{ route('viewGradeDetail', ['id' => $student->UserId]) }}">View</a></td>
            </tr>
            @php
                $numeral++;
            @endphp
        @endforeach
    </tbody>
    @endif
</table>

</body>
</html>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/viewGradeStyle.css">
</head>
<body>
<form method="POST" action="{{ route('process.view.grade') }}">
    @csrf
    <label for="classroom">Select Classroom:</label>
    <select name="classroom" id="classroom">
        @foreach ($classrooms as $classroom)
            <option value="{{ $classroom->ClassroomID}}">{{ $classroom->ClassroomName }}</option>
        @endforeach
    </select>
    <button type="submit">Submit</button>
</form>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Student Name</th>
        <th scope="col">Status</th>
        <th scope="col">Scores</th>
        <th scope="col">Detail</th>
        </tr>
    </thead>
@if (isset($students))
    <tbody class="table-group-divider">
            @php
                $numeral = 1;
            @endphp
            @foreach($students as $student)
                <tr class="{{ $numeral % 2 == 0 ? 'table-row-odd' : '' }}">
                    <td>{{ $numeral }}</td>
                    <td>{{ $student->user->UserName}}</td>
                    <td>
                        @if($student->StatusPlayed == 1)
                            Submmited
                        @elseif($student->StatusPlayed == 0)
                            Late
                        @endif
                    </td>
                    <td>{{$student->QuizScore}}</td>
                    <td><a href="{{ route('viewGradeDetail', ['id' => $student->UserID]) }}">...</a></td>
                </tr>
                @php
                    $numeral++;
                @endphp
            @endforeach
    </tbody>
    </table>
@endif
</body>
</html> --}}

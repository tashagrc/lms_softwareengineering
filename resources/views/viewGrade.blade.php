@extends('layouts.navbarTwo')
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
@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Student Name</th>
      <th scope="col">Status</th>
      <th scope="col">Score</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
        @php
            $numeral = 1;
        @endphp
        @foreach($grades as $g)
            <tr class="{{ $numeral % 2 == 0 ? 'table-row-odd' : '' }}">
                <td>{{ $numeral }}</td>
                <td>{{ $g->user->UserName}}</td>
                <td>
                    @if($g->StatusPlayed == 1)
                        Submmited
                    @elseif($g->StatusPlayed == 0)
                        Late
                    @endif
                </td>
                <td>{{$g->QuizScore}}</td>
                <td><a href="{{ route('viewGradeDetail', ['id' => $g->UserId]) }}">...</a></td>
            </tr>
            @php
                $numeral++;
            @endphp
        @endforeach
  </tbody>
</table>
@endsection
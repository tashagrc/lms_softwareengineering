<h1>quiz list</h1>

<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Date</td>
        <td>Start</td>
        <td>End</td>
        <td>Prepare</td>
    </tr>
    @foreach($quizzes as $q)
    <tr>
        <td>{{$q['QuizID']}}</td>
        <td>{{$q['QuizTitle']}}</td>
        <td>{{$q['QuizDate']}}</td>
        <td>{{$q['QuizStart']}}</td>
        <td>{{$q['QuizEnd']}}</td>
        <td>{{$q['QuizPrepare']}}</td>
    </tr>
    @endforeach
</table>

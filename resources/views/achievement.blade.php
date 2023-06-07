<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Badges</h1>
    @foreach($badges as $b)
        <p>{{$b["BadgesName"]}}</p>
        <p>{{$b["BadgesDescription"]}}</p>
    @endforeach
    <h1>Leaderboard</h1>
    @foreach($leaderboard as $user)
        <p>{{$user["UserName"]}}</p>
    @endforeach
</body>
</html>

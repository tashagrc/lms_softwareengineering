<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/navbarTwo.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="nav-row">
        <div class="left-bar">
            <div class="logo">
                <img src="{{ asset('img/logoReadRacoon.png') }}" alt="description of myimage">
            </div>
            <div class="pages-bar">
                <div class="section-1">
                    <div class="dashboard">
                        <img src="{{ asset('img/home.png') }}" alt="description of myimage">
                        <p>Dashboard</p>
                    </div>
                    <div class="course">
                        <img src="{{ asset('img/course.png') }}" alt="description of myimage">
                        <p>Courses</p>
                    </div>
                    <div class="quiz">
                        <img src="{{ asset('img/quiz.png') }}" alt="description of myimage">
                        <p>Quiz</p>
                    </div>
                    <div class="grade">
                        <img src="{{ asset('img/grade.png') }}" alt="description of myimage">
                        <p>Grade</p>
                    </div>
                </div>
                <div class="setting">
                    <img src="{{ asset('img/setting.png') }}" alt="description of myimage">
                    <p>Settings</p>
                </div>
            </div>
        </div>
        <div class="right-bar">
            <div class="title">
                <h1>My Courses</h1>
            </div>
            <div class="detail-row">
                <img src="{{ asset('img/notification.png') }}" alt="description of myimage" class="noti">
                <img src="{{ asset('img/saved.png') }}" alt="description of myimage" class="save">
                <img src="{{ asset('img/profile.png') }}" alt="description of myimage" class="pp">
            </div>
        </div>
    </div>

</body>
</html>
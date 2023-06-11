<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/navbarTwoForTeacher.css') }}" rel="stylesheet">
</head>
<body>

    <div class="nav-row">
        <div class="left-bar">
            <div class="logo">
                <img src="{{ asset('img/logoReadRacoon.png') }}" alt="description of myimage">
            </div>
            <div class="pages-bar">
                <div class="section-1">
                    <a href="" class="button-link">
                        <div class="dashboard">
                            <img src="{{ asset('img/home.png') }}" alt="description of myimage">
                            <p>Dashboard</p>
                        </div>
                    </a>
                    <a href="" class="button-link">
                        <div class="course">
                            <img src="{{ asset('img/course.png') }}" alt="description of myimage">
                            <p>Courses</p>
                        </div>
                    </a>
                    <a href="" class="button-link">
                        <div class="quiz">
                            <img src="{{ asset('img/quiz.png') }}" alt="description of myimage">
                            <p>Quiz</p>
                        </div>
                    </a>
                    <a href="" class="button-link">
                        <div class="grade">
                            <img src="{{ asset('img/grade.png') }}" alt="description of myimage">
                            <p>Grade</p>
                        </div>
                    </a>
                </div>
                <a href="" class="button-link">
                    <div class="setting">
                        <img src="{{ asset('img/setting.png') }}" alt="description of myimage">
                        <p>Settings</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="right-side">
        <div class="right-bar">
            <div class="title">
                <h1> Create Quiz </h1>
            </div>
            <div class="detail-row">
                <a href=""><img src="{{ asset('img/notification.png') }}" alt="description of myimage" class="noti"></a>
                <a href=""><img src="{{ asset('img/saved.png') }}" alt="description of myimage" class="save"></a>
                <a href=""><img src="{{ asset('img/profile.png') }}" alt="description of myimage" class="pp"></a>
            </div>
        </div>
        <div class="container">
            @yield('container')
            </div>
            </div>
        </div>
        </div>
        </div>


    </div>

</body>
</html>
<script src="{{ asset('js/bootstrap.js') }}"></script>

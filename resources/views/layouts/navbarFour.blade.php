<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('/css/navbarFour.css') }}" rel="stylesheet">

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
        <div class="middle-bar" style="display: flex; flex-direction:column">
            <div class="title" style="padding-top:20px">
                <h3>Dashboard</h3>
            </div>
            <br/>
            <div class="container">
                @yield('container')
            </div>
        </div>



        <div class="right-bar">
            <div class="detail-row">
                <a href=""><img src="{{ asset('img/notification.png') }}" alt="description of myimage" class="noti"></a>
                <a href=""><img src="{{ asset('img/saved.png') }}" alt="description of myimage" class="save"></a>
            </div>
            <div class="user-profile">
                <img src="{{ asset('img/profile.jpg') }}" alt="description of myimage" class="pp">
                <h1 class="nama">Hi, NAMA</h1>
                <div class="badge">
                    <img src="{{ asset('img/star.png') }}" alt="description of myimage" class="star">
                    <p>Warrior</p>
                </div>
            </div>
            <div class="progress">
                <div class="title-progress">
                    <p>Earn 1200 xp to be a</p>
                    <h5>Legend</h5>
                </div>
                <div class="progress-bar">
                    <div id="bar"></div>
                </div>
            </div>
            <div class="history">
                <div class="title-history">
                    <h1>Quizzes History</h1>
                    <a href="">View all</a>
                </div>
                <div class="history-detail">
                    <a href="" class="button-link">
                        <div class="history-detail-row">
                            <div class="history-detail-col">
                                <div class="title-detail">
                                    <h1 class="title-black">Literacy Quiz</h1>
                                    <h1 class="title-red">#1</h1>
                                </div>
                                <p class="history-subject">Social Literacy</p>
                            </div>
                            <h1 class="history-nilai">92</h1>
                        </div>
                    </a>
                    <a href="" class="button-link">
                        <div class="history-detail-row">
                            <div class="history-detail-col">
                                <div class="title-detail">
                                    <h1 class="title-black">Literacy Quiz</h1>
                                    <h1 class="title-red">#1</h1>
                                </div>
                                <p class="history-subject">Social Literacy</p>
                            </div>
                            <h1 class="history-nilai">92</h1>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>

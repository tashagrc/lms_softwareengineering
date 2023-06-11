<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/racoon.svg') }}">
    <link href="{{ asset('/css/navbarFour.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

    <div class="nav-row">
        <div class="left-bar">
            <div class="logo pt-4">
                <img src="{{ asset('img/logoReadRacoon.png') }}" alt="description of myimage">
            </div>
            <div class="pages-bar">
                <div class="section-1">
                    <a href="{{url('/dashboard')}}" class="button-link">
                        <div class="dashboard">
                            <img src="{{ asset('img/home.png') }}" alt="description of myimage">
                            <p>Dashboard</p>
                        </div>
                    </a>
                    <a href="#" class="button-link">
                        <div class="course">
                            <img src="{{ asset('img/course.png') }}" alt="description of myimage">
                            <p>Courses</p>
                        </div>
                    </a>
                    <a href="{{url('quizList/')}}" class="button-link">
                        <div class="quiz">
                            <img src="{{ asset('img/quiz.png') }}" alt="description of myimage">
                            <p>Quiz</p>
                        </div>
                    </a>
                    <a href="{{url('grade/')}}" class="button-link">
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

            @auth
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger mt-2" style="width:120px">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
        <div class="middle-bar" style="display: flex; flex-direction:column">
            <div class="title" style="padding-top:20px">
                <h3 class="">@yield('title')</h3>
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
                <img src="{{ asset('img/profile.svg') }}" alt="description of myimage" class="pp">
                <h1 class="nama">Hi, Michael Varian</h1>
                <span class="badge text-dark">
                    <img src="{{ asset('img/star.png') }}" alt="description of myimage" class="star">
                    Warrior</span>
{{--
                <div class="badge">
                    <img src="{{ asset('img/star.png') }}" alt="description of myimage" class="star">
                    <p class="text-black">Warrior</p>
                </div> --}}
            </div>
            <div class="card">
                <a href="/achievement" style="text-decoration: none; color:black">
                    <div class="card-body">
                        <h6 style="font-size: 14px">Earn 1200 xp to be a Legend</h6>
                    </div>
                    <div class="progress-container">
                        <div class="progress-sec" style="width: 40%"></div>
                    </div>
                </a>
            </div>

            <div class="history">
                <div class="title-history">
                    <h1>Quizzes History</h1>
                    <a href="">View all</a>
                </div>
                <div class="history-detail">
                    {{-- @foreach($quizzes as $q)

                    <a href="" class="button-link">

                        <div class="history-detail-row">
                            <div class="history-detail-col">
                                <div class="title-detail">
                                    <h5 class="card-title mb-3">{{$q['QuizTitle']}}</h5>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted">{{$q['CourseName']}} </h6>
                            </div>
                            @if($q['StatusPlayed'] == true)
                                <h6 class="card-subtitle mb-2 text-muted">Score</h6>
                                <h5 class="card-subtitle mb-2 font-weight-bold">{{$q['QuizScore']}} </h5>
                            @else
                                <a href="{{url('quizList/quizDetails', $q->QuizID)}}" class="card-link">
                                    <img src="{{ asset('img/play_button.png') }}" alt="play icon" style="width:50px">
                                </a>
                            @endif
                        </div>
                    </a>
                    @endforeach --}}
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

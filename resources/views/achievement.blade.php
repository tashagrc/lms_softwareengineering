@extends('layouts.navbarTwo')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadRacoon</title>
    <link rel="stylesheet" href="css/achievement.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

    @section('title')
    <b>Achievement</b>
    @endsection

@section('container')
    <div class="container mx-auto">
        <div class="row">
            <div class="col-12">
                <div class="card w-100 mb-3 card-container2">
                    <div class="card-body d-flex pd-2">
                        <img src="{{ asset('img/profile.jpg') }}" alt="description of myimage" class="pp" style="width:10%; height:10%">
                        <div class="details d-flex flex-column mx-4">
                            <div class="words d-flex pe-4">
                                <h5 class="card-title fs-2 fw-bold text-danger">Agnes Anastasia</h5>
                                <span class="badge text-dark d-flex align-items-center">
                                    <img src="{{ asset('img/star.svg') }}" alt="description of myimage" class="star" style="width:25px">
                                    <span class="ms-2">Warrior</span>
                                </span>

                            </div>
                            <p class="card-text">Earn 1200xp to be a Legend</p>
                        </div>
                    </div>
                    <div class="progress-container">
                        <div class="progress-sec" style="width: 40%"></div>
                    </div>
                </div>

                <div class="sections d-flex">
                    <div class="card mb-3 me-4 card-container">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Badges</h5>
                            @foreach($badges as $b)
                                <a href="#" class="btn w-100 my-2" style="background-color:#FEF7F7">
                                    <div class="details d-flex">
                                        <img class="mx-3" src="{{ asset('img/star.svg') }}" alt="description of myimage" class="star" width="50px">
                                        <div class="text-start">
                                            <p class="fw-bold">{{$b["BadgesName"]}}</p>
                                            <p>{{$b["BadgesDescription"]}}</p>
                                        </div>
                                    </div>

                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="card mb-3" style="">
                        <div class="card-body">
                          <h5 class="card-title fw-bold">Leaderboard</h5>
                          @foreach($leaderboard as $user)
                          <a href="#" class="btn w-100 my-2" style="background-color:#FEF7F7">
                              <div class="details d-flex">
                                  <img class="mx-3 align-self-start" src="{{ asset('img/profile.png') }}" alt="description of myimage" class="star" style="max-width: 50px; height: auto;">
                                  <div class="text-start">
                                    <p>{{$user["UserName"]}}</p>
                                    <p>{{$user["UserXP"]}}</p>
                                  </div>
                              </div>

                          </a>
                      @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
@endsection

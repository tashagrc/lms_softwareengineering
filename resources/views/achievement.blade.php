@extends('layouts.navbarTwo')


<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('container')
    <div class="container">
        <div class="row">
            <div class="col" style="margin-left:15%">
                <div class="card w-100 mb-3">
                    <div class="card-body d-flex p-4">
                        <img src="{{ asset('img/profile.jpg') }}" alt="description of myimage" class="pp" style="width:10%; height:10%">
                        <div class="details d-flex flex-column mx-4">
                            <div class="words d-flex pe-4">
                                <h5 class="card-title fs-2 fw-bold text-danger">Agnes Anastasia</h5>
                                <span class="badge text-dark">
                                    <img src="{{ asset('img/star.svg') }}" alt="description of myimage" class="star" style="width:25px">
                                    Warrior</span>
                            </div>
                            <p class="card-text">Earn 1200xp to be a legend</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger" style="width: 0%"></div>
                          </div>
                    </div>
                </div>
                <div class="sections d-flex">
                    <div class="card mb-3 me-4" style="">
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
                                  <img class="mx-3" src="{{ asset('img/star.svg') }}" alt="description of myimage" class="star" width="50px">
                                  <div class="text-start">
                                    <p>{{$user["UserName"]}}</p>
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
    @endsection
</body>
</html>

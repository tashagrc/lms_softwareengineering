
@extends('layouts.navbarTwoForStudent')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/achievement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

@section('container')
<div class="container mx-auto">
    <div class="row" style="width: 70vw">
        <div class="col" >
            <div class="card w-100 mb-3 card-container2">
                <div class="card-body d-flex pd-2">
                    <img src="{{ asset('img/profile.svg') }}" alt="description of myimage" class="pp" style="width:10%; height:10%">
                    <div class="details d-flex flex-column mx-4">
                        <div class="words d-flex pe-4">
                            <h5 class="card-title fs-2 fw-bold text-danger">{{$users["UserName"]}}</h5>
                            <span class="badge text-dark d-flex align-items-center" style="background-color: #FEF7F7;">
                                <img src="{{ asset('img/star.svg') }}" alt="description of myimage" class="star" style="width:25px">
                                <span class="ms-2" style="font-size:15px">Warrior</span>
                            </span>

                        </div>
                        <p class="card-text">Earn {{2000- $userXP}} to be a Legend</p>
                    </div>
                </div>
                <div class="progress-container">
                    <div class="progress-sec" role="progressbar" style="width: {{ ($userXP / 2000) * 100 }}%;" aria-valuenow="{{ $userXP }}" aria-valuemin="0" aria-valuemax="2000"></div>
                </div>
            </div>
            <div class="sections d-flex">
                <div class="card mb-3 me-4" style="width: 35vw">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Personal Information</h5>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="{{$users["UserName"]}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{$users["UserEmail"]}}">
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="width:35vw">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Change Password</h5>
                        <label for="inputPassword5" class="form-label">Current Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                        </div>
                        <label for="inputPassword5" class="form-label">New Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="action-button col-auto">
                    <button type="button" class="btn btn-danger btn-lg mt-4"><a href="" style="text-decoration:none; color:white">Save and Continue</a></button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


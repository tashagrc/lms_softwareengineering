<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

@extends('layouts.navbarTwo')

@section('container')
<div class="container">
    <div class="row">
        <div class="col" style="margin-left:15%">
            <div class="card w-100 mb-3">
                <div class="card-body d-flex p-4">
                    <img src="{{ asset('img/profile.jpg') }}" alt="description of myimage" class="pp">
                    <div class="details d-flex flex-column mx-4">
                        <div class="words d-flex pe-4">
                            <h5 class="card-title fs-2 fw-bold text-danger">{{$users["UserName"]}}</h5>
                            <span class="badge text-dark">
                                <img src="{{ asset('img/star.svg') }}" alt="description of myimage" class="star" style="width:25px">
                                Warrior</span>
                        </div>
                        <p class="card-text">Earn 1200xp to be a legend</p>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 0%"></div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="sections d-flex">
                <div class="card mb-3 me-4" style="width: 40rem">
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
                <div class="card mb-3" style="">
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


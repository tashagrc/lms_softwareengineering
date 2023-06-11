
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/dashboard.css') }}">

@extends('layouts.navbarFour')

@section('title')
<b>Dashboard</b>
@endsection

@section('container')

    @guest
        <h1>
            Hello
        </h1>
    @endguest


    {{-- QUIZ BANNER --}}
    <div class="container-sm">
        <div class="row">
            {{-- <div class="col-12"> --}}
                <div class="card w-100 mb-3">
                    <div class="card-body d-flex justify-content-between p-4 align-items-center">
                        <div class="words">
                            <h5 class="card-title fs-2 fw-bold text-grey">Literacy Quiz<span class="card-title fs-2 fw-bold text-danger"> #5</span></h5>
                            <span class="text-dark pt-2 d-flex">
                                <img src="{{ asset('img/course.png') }}" alt="book icon" style="width:20px;height:20px"class="me-2">
                                <h6 class="text-muted m-0">Historical Literacy</h6>
                            </span>
                        </div>
                        <div class="action">
                            <a href="#" class="card-link">
                                <img src="{{ asset('img/play_button.png') }}" alt="play icon" style="width:50px">
                            </a>
                        </div>
                    </div>
                </div>
                {{-- ACTIVE CLASSES --}}
                <div class="title fs-4 fw-bold text-gray my-4">Active Classes</div>
                <div class="classes d-flex justify-content">
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body m-2">
                        <h5 class="card-title fs-5 pb-4">Historical Literacy</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Class Progress</h6>
                        <div class="progress-container w-100">
                            <div class="progress-sec" style="width: 40%"></div>
                        </div>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body m-2">
                        <h5 class="card-title fs-5 pb-4">Biological Literacy</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Class Progress</h6>
                        <div class="progress-container w-100">
                            <div class="progress-sec" style="width: 60%"></div>
                        </div>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body m-2">
                        <h5 class="card-title fs-5 pb-4">English Literacy</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Class Progress</h6>
                        <div class="progress-container w-100">
                            <div class="progress-sec" style="width: 80%"></div>
                        </div>
                        </div>
                    </div>
                </div>

                {{-- FRESH ARTICLES --}}
                <div class="title fs-4 fw-bold text-gray my-4">Fresh Articles</div>
                <div class="articles d-flex justify-content">
                    <div class="card m-2" style="width: 18rem;">
                      <img src="{{ asset('img/essay.svg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Tips for Writing Essays</h5>
                        <p class="card-text">Writing Essays is fun, get to know the SMART method for fast and creative essay writing</p>
                        <br/>
                    </div>
                      <div class="card-body">
                        <a href="#" class="card-link-unstyled text-danger">See more ></a>
                      </div>
                    </div>
                    <div class="card m-2" style="width: 18rem;">
                      <img src="{{ asset('img/swift.svg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Computational Swift Counting</h5>
                        <p class="card-text">Researchers have introduced a game-changing algorithm that enables computers to count at unprecedented speeds.</p>
                      </div>
                      <div class="card-body">
                        <a href="#" class="card-link-unstyled text-danger">See more ></a>
                      </div>
                    </div>
                  </div>

            {{-- </div> --}}

        </div>

    </div>
@endsection
<script src="{{ asset('js/bootstrap.js') }}"></script>



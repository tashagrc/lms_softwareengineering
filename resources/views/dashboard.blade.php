<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

@extends('layouts.navbarFour')
@section('container')

    @guest
        <h1>
            Hello
        </h1>
    @endguest

    @auth
        <h2>
            <form action="/logout" method="post">
                @csrf
                <button>
                    Logout
                </button>
            </form>

        </h2>
    @endauth
    {{-- QUIZ BANNER --}}
    <div class="container-sm">
        <div class="row">
            {{-- <div class="col-12"> --}}
                <div class="card w-100 mb-3">
                    <div class="card-body d-flex justify-content-between p-4">
                        <div class="words">
                            <h5 class="card-title fs-2 fw-bold text-danger">Literacy Quiz #5</h5>
                            <p class="card-text">Historical Literacy | Bayu S | 27 Students</p>
                        </div>
                        <div class="action">
                            <a href="#" class="btn btn-danger btn-lg">Play</a>
                        </div>
                    </div>
                </div>
                {{-- ACTIVE CLASSES --}}
                <div class="title fs-4 fw-bold text-gray my-4">Active Classes</div>
                <div class="classes d-flex justify-content">
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body m-2">
                        <h5 class="card-title fs-5">Historical Literacy</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Class Progress</h6>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body m-2">
                        <h5 class="card-title fs-5">Biological Literacy</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Class Progress</h6>
                        </div>
                    </div>
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body m-2">
                        <h5 class="card-title fs-5">English Literacy</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Class Progress</h6>
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


<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

@extends('layouts.navbarTwo')
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

<div class="card w-75 mb-3">
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

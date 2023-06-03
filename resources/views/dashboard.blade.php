@extends('layouts.navbarRegister')
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
@endsection

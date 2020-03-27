@extends('master')
@section('title')
    - Administrator
@endsection
@section('sidebar-administrator')
    w3-blue
@endsection
@section('header')
<div class="w3-container" align="RIGHT">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <button class="w3-button w3-green w3-round-large"><a href="{{ route('login') }}">Login</a></button>

                        @if (Route::has('register'))
                        <button class="w3-button w3-light-blue w3-round-large" ><a href="{{ route('register') }}">Register</a></button>

                        @endif
                    @endauth
                    <a class="w3-bar-item w3-right" href="{{ URL::to('locale/en') }}"><img src="{{url('images/flag-en.jpg')}}" class="w3-circle" alt="flag-en" style="width: 30px"></a>
                    <a class="w3-bar-item w3-right" href="{{ URL::to('locale/th') }}"><img src="{{url('images/flag-th.png')}}" class="w3-circle" alt="flag-th" style="width: 30px"></a>
                </div>
            @endif

</div>
@endsection

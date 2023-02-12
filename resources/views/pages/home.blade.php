@extends('layouts.base')


@section('content')
    <h1>Portfolio</h1>
    <div class="container">
        @foreach ($auths as $auth)
        <div class="container-img">
            <h3>NOME PROGETTO: {{ $auth -> name }}</h3>

           
            <img src="{{ asset('storage/' . $auth -> main_image) }}">

            <a href="{{ $auth -> repo_link }}">REPO LINK</a>

            <a href="{{ route('auth.show' , $auth)}}"> VISUALIZZA IL PROGETTO</a>
        </div>
        @endforeach
    </div>
@endsection



@extends('layouts.base')


@section('content')
    <h1>PROGETTI :</h1>
    <div class="container">
        @foreach ($auths as $auth)
        <div class="container-img">
            <img src="{{ $auth->main_image }}" alt="">
            <h3>NOME PROGETTO: {{ $auth -> name }}</h3>
            <a href="{{ $auth -> repo_link }}">REPO LINK</a>
        </div>
        @endforeach
    </div>
@endsection



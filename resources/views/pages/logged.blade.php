@extends('layouts.base')


@section('content')
    <h1>Dashboard di {{ Auth::user()->name }}</h1>
    <a href="{{ route('auth.create') }}">Inserisci un nuovo progetto</a>

    <div class="container">
        @foreach ($auths as $auth)
        <div class="container-img">
            <h3>NOME PROGETTO: {{ $auth -> name }}</h3>

           
            <img src="{{ $auth->main_image }}" alt="">
            
            <a href="{{ $auth -> repo_link }}">REPO LINK</a>


            <a href="{{ route('auth.delete', $auth)}}">DELETE</a>

            <a href="{{ route('auth.edit', $auth)}}">EDIT</a>
        </div>
        @endforeach
    </div>
@endsection


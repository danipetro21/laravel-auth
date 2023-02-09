@extends('layouts.base')


@section('content')


    <h1>NOME PROGETTO:  {{ $auth -> name }}</h1>

    <img src="{{ $auth -> main_image }}" alt="" style="width: 500px">

    <h2><a href="{{ $auth -> repo_link }}">REPO LINK</a></h2>

    <p>DESCRIZIONE DEL PROGETTO : {{ $auth -> description }}</p>
    
@endsection


<style>


</style>
@extends('layouts.base')


@section('content')


    <h1>NOME PROGETTO:  {{ $auth -> name }}</h1>

    
    <img src="{{ asset('storage/' . $auth -> main_image) }}" style="width: 500px">
    <h2><a href="{{ $auth -> repo_link }}">REPO LINK</a></h2>

    <p>DESCRIZIONE DEL PROGETTO : {{ $auth -> description }}</p>
    
@endsection


<style>


</style>
@extends('layouts.base')

@section('content')

<h1>Aggiorna il progetto</h1>
{{-- @include('components.errors') --}}

<form action="{{ route('auth.update', $auth) }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $auth -> name }}">
    <br>
    <br>
    <label for="description">Description</label>
    <input type="textarea" name="description" value="{{ $auth -> description }}">
    <br>
    <br>
    <label for="main_image">Url Main Image</label>
    <input type="text" name="main_image" value="{{ $auth -> main_image }}">
    <br>
    <br>
    <label for="relase_date">Relase Date</label>
    <input type="date" name="relase_date" value="{{ $auth -> relase_date }}">
    <br>
    <br>
    <label for="repo_link">Url Repo Link</label>
    <input type="text" name="repo_link" value="{{ $auth -> repo_link }}">
    <br>
    <br>
    <input type="submit" value="Inserisci">
</form>
@endsection
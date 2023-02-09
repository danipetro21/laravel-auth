@extends('layouts.base')

@section('content')

<h1>Inserisci un nuovo progetto</h1>
{{-- @include('components.errors') --}}

<form action="{{ route('auth.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">
    <br>
    <br>
    <label for="description">Description</label>
    <input type="textarea" name="description">
    <br>
    <br>
    <label for="main_image">Url Main Image</label>
    <input type="text" name="main_image">
    <br>
    <br>
    <label for="relase_date">Relase Date</label>
    <input type="date" name="relase_date">
    <br>
    <br>
    <label for="repo_link">Url Repo Link</label>
    <input type="text" name="repo_link">
    <br>
    <br>
    <input type="submit" value="Inserisci">
</form>
@endsection
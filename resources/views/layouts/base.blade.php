<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])

</head>

<body>

    @include('components.header')


    @yield('content')



    @include('components.footer')

</body>

</html>


<style lang="scss">
    .container-img {
        width: calc(100% / 3 - 20px);
        margin: 20px 10px;
        border: 1px solid black;
        padding: 20px;


    }

    img {
        width: 100%;
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
</style>

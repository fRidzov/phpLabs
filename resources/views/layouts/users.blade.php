@extends('layouts.old_app')

@section('title', 'Customers')
<head>
    <!-- Scripts -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
@section('sidebar')
    <h1 class="text-amber-500 content-stretch"> Users - @yield('routeName') route. </h1>
@show

<div class="place-content-center">
    @yield('content')
</div>
</body>

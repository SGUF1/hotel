<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'HOTELS')</title>


    @vite('resources/css/app.css')
    <!-- Fonts -->
    <!-- Styles -->

<body>
    @if (Auth::check())
        <x-header title="SGUF'S BOOKING" username="{{ auth()->user()->username }}" />
        <div class="flex">
            <x-sidebar></x-sidebar>
            @yield('content')
        </div>
    @else
        <x-header title="SGUF'S BOOKING" />
        @yield('content')
    @endif

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @yield('javascript')



</html>

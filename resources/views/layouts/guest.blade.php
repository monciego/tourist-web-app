<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Style -->
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body>


    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')


        <div class="font-sans pt-24 text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </div>
</body>

</html>

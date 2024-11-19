<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="organization" content="Riwi">
    <meta name="copyright" content="© 2024 Riwi. All rights reserved">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="15days">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- Nav bar --}}
    @include('layouts.navigation')
    
    <!-- component -->
    <main class="mt-10">
        <div class="container mx-auto px-4 sm:px-6">
            @yield('content')
        </div>
    </main>

    <footer class="flex justify-around items-center h-20 mt-8 w-full bg-cBlack">
        <div class="flex items-center text-cWhite text-2xl">
            CordiSimple
        </div>
        <div class="flex items-center gap-4">
            <a href="https://github.com/Jhon-Develop/CordiSimple" class="text-cWhite text-lg"> Github </a>
            <a href="" class="text-cWhite text-lg"> Gmail </a>

        </div>
    </footer>

    <script src="{{ asset('js/flyonui.js') }}"></script>
</body>

</html>

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
    <!-- Header -->
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-2 ">
        <div class="flex lg:justify-center lg:col-span-1">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mx-12">CordiSimple</h1>
        </div>
        @if (Route::has('login'))
            <nav class="mx-12 flex justify-center col-2">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log
                        in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

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

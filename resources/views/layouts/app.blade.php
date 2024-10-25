<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset --}}

        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <li class="list-none flex justify-center gap-32">
                    <div>
                        <a href="/dashboard"
                            class="{{ Request::is('dashboard') ? 'text-indigo-600 font-medium' : 'text-black font-medium' }}">Dashboard</a>
                        <div
                            class=" {{ Request::is('dashboard') ? ' w-18 h-[3px] rounded-full bg-indigo-600' : 'hidden' }} ">
                        </div>
                    </div>
                    <div>
                        <a href="/Absensi"
                            class="{{ Request::is('absensi') ? 'text-indigo-600 font-medium' : 'text-black font-medium' }}">Absensi</a>
                        <div
                            class=" {{ Request::is('absensi') ? ' w-18 h-[3px] rounded-full bg-indigo-600' : 'hidden' }} ">
                        </div>
                    </div>
                    <div>
                        <a href="/Kelas"
                            class="{{ Request::is('kelas') ? 'text-indigo-600 font-medium' : 'text-black font-medium' }}">Kelas</a>
                        <div
                            class=" {{ Request::is('kelas') ? ' w-18 h-[3px] rounded-full bg-indigo-600' : 'hidden' }} ">
                        </div>
                    </div>

                </li>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>

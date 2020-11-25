<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">


    @livewireStyles
    @laravelPWA

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
</head>
<body class="font-opensans antialiased">
    <div class="min-h-screen bg-gray-100">
        @livewire('header.header', ['pagename' => $header->__toString()])

        <!-- Page Content -->
        <main class="py-4">
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>

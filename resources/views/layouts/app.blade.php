<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','RetailMeNot Clone')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('styles')
</head>

<body class="min-h-screen font-sans antialiased [font-synthesis:none]">
    <header class="z-50 bg-purple-700 text-sm font-bold text-white">
        @include('partials.topbar')
        @include('partials.header')
    </header>
    <main class="mt-3">
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>

</html>
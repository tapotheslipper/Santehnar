<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Сантехнарь | @yield('title', 'Главная') </title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo/favicon.svg') }}" />

    @vite(['resources/css/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <div class="container">
            @include('layouts.partials.header')
        </div>
    </header>
    <main class="site-main">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="site-footer">
        <div class="container">
            @include('layouts.partials.footer')
        </div>
    </footer>
</body>
</html>

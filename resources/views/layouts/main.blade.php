<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgriVision Garut')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="site-header">
        <div class="container header-inner">
            <h1 class="brand">AgriVision Kabupaten Garut</h1>
            <button id="menu-toggle" class="menu-toggle" aria-label="Buka menu">&#9776;</button>
            @include('partials.navbar')
        </div>
    </header>

    <main class="container content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>&copy; 2026 AgriVision – Kelompok Tani Makmur Kabupaten Garut</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
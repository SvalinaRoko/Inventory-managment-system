<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')
    <title class="title">@yield('title', 'RabbitTrack')</title>
</head>
<body>
    <header class="header">
        <nav class="main-nav">
        <a><img class="logo" src="{{ asset('images/RabbitTrack-logo.png') }}" alt="RabbitTrack logo"  width="835" height="810"/></a>
            <ul class="nav-links">
                @yield('nav-links')
                @auth
                <li><a class="nav-link" href="/">Log out</a></li>
                @endauth
                @guest
                <li><a class="nav-link" href="{{route('login')}}">Log in</a></li>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        <section class="section-hero">
            @yield('hero')
        </section>
        <section class="section-features">
            @yield('features')
        </section>
    </main>
    <footer class="footer-section">
        <small>&copy; 2025 All rights reserved</small>
    </footer>
</body>
</html>
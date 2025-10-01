<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title class="title">@yield('title', 'RabbitTrack')</title>
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <nav class="main-nav">
                <a href="/"><img class="logo" src="{{ asset('images/RabbitTrack-logo.png') }}" alt="RabbitTrack logo"  width="835" height="810"/></a>
                <ul class="nav-links">
                    @yield('nav-links')
                </ul>
            </nav>
        </header>
        <main class="main-content">
            <section class="section-hero">
                @yield('hero')
            </section>
            <section class="section-features">
                @yield('features')
            </section>
        </main>
        <footer class="footer-section ">
            <small>&copy; {{ date ('Y')}} All rights reserved</small>
        </footer>
    </div>
</body>
</html>
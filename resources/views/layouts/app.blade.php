<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Home</a>
            <a class="navbar-brand" href="/profile">Profile</a>
        </nav>
    </header>
    <main class="container mt-5">
        @yield('content')
    </main>
    <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} My Company</p>
    </footer>
    <!-- Scripts -->
    @vite('resources/js/app.js')
</body>
</html>

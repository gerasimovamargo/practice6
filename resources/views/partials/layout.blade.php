<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GuestBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">PHP</a>

    {{-- Ліва частина меню --}}
    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('guestbook') }}">Guestbook</a>
        </li>
    </ul>

    {{-- Права частина меню --}}
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
    </ul>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>

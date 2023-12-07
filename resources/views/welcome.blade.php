<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="antialiased">
    <div class="login-container">
        @if (Route::has('login'))
        <div class="text-center">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
            @else
            <h2 class="text-xl font-semibold text-gray-900">Log in</h2>

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="login-button">Log in</button>
            </form>

            @if (Route::has('register'))
            <p class="mt-4 text-gray-500 text-sm">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register</a>
            </p>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodTrends</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Your custom CSS file -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans bg-secondary text-white">

    <header class="navbar navbar-expand-lg navbar-dark bg-dark border-b border-gray-800 pt-2 pb-1 fixed-top">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <a class="navbar-brand" href="#">
                <img src="/image/foodlogo.png" width="60" height="60" alt="Logo">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item md:ml-16 mt-3 md:mt-0">
                        <a class="nav-link hover:bg-green-700" style="font-weight: bold;" href="{{ route('recipe.index') }}">Home</a>
                    </li>
                </ul>
            </div>
            <div class="flex-items-center">
                @auth
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"> Manage account
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" style="font-weight: bold;" href="{{ route('profile.show') }}">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" style="font-weight: bold;" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </header>

    @yield('content')

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
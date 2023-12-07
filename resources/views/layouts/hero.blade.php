<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodTrends</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="/css/app.css">

</head>

<body class="font-sans bg-secondary text-white">
    <header class="navbar navbar-expand-lg navbar-dark bg-dark border-b border-gray-800 pt-2 pb-2 fixed-top">
        <div class="container d-flex justify-content-center align-items-center px-4 py-6">
            <img src="/image/foodlogo.png" width="60" height="60" alt="Logo">
        </div>
    </header>

    <div class="container mt-5">
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
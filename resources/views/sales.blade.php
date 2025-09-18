<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales ni Val</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}Midterm Exam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="{{ route('orders.index') }}" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content');
    </div>
</body>
</html>

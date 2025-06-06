<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🌍 Travel Journal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        nav,footer {
            background-color: #1f1f1f !important;
        }
        nav a {
            color: #ffa726 !important;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: #fff !important;
            background-color: #333333;
            padding: 4px 8px;
            border-radius: 4px;
            text-decoration: none;
        }

        a {
            color: #90caf9 !important;
        }
        a:hover {
            color: #ffffff !important;
        }
    </style>
</head>
<body>
    <nav class="shadow-sm p-4 d-flex justify-content-between align-items-center">
        <h1 class="h5 m-0">🌍 Travel Journal</h1>
        <div class="d-flex gap-3">
            <a class="text-decoration-none fw-semibold" href="/">Home</a>
            <a class="text-decoration-none fw-semibold" href="/review">Reviews</a>
            <a class="text-decoration-none fw-semibold" href="/about">About Us</a>
            @auth
                <a class="text-decoration-none fw-semibold" href="/dashboard">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit"
                        class="bg-transparent border-0 fw-semibold text-warning text-decoration-none"
                        style="padding: 0; margin: 0; cursor: pointer;">
                        Logout
                    </button>
                </form>
            @else
                <a class="text-decoration-none fw-semibold" href="/register">Register</a>
            @endauth
        </div>
    </nav>

    <main class="container py-5">
        @yield('main_content')
    </main>

<footer class="footer text-center mt-5 py-4">
  <div class="container">
    <p class="mt-3 text-white">© <?= date("Y") ?> Travel Journal. All rights reserved.</p>
  </div>
</footer>
</body>
</html>

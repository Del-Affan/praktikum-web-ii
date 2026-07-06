<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio Saya')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            margin-top: 50px;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- ============================================ -->
    <!-- HEADER / NAVBAR                             -->
    <!-- ============================================ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Portfolio Saya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('/')) active @endif" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('profil')) active @endif" href="{{ url('/profil') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('pendidikan')) active @endif" href="{{ url('/pendidikan') }}">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('keahlian')) active @endif" href="{{ url('/keahlian') }}">Keahlian</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ============================================ -->
    <!-- MAIN CONTENT                               -->
    <!-- ============================================ -->
    <div class="container">
        @yield('content')
    </div>

    <!-- ============================================ -->
    <!-- FOOTER                                     -->
    <!-- ============================================ -->
    <footer>
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} Portfolio Saya. Dibuat dengan Laravel &hearts;</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
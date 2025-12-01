<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Gestion Étudiants')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body {
            background: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0;
            margin-top: 80px;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <i class="bi bi-mortarboard-fill"></i> École Des Langues
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                    </li>
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.cours') }}">Cours</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.cours') }}">Langues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.about') }}">À Propos</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a>
                    </li>
                    
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                    <i class="bi bi-speedometer2"></i> Dashboard
                                </a>
                            </li>
                        @endif
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            <i class="bi bi-box-arrow-right"></i> Déconnexion
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="bi bi-box-arrow-in-right"></i> Connexion
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-light text-dark px-3 ms-2" href="{{ route('register') }}">
                                Inscription
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    @yield('content')

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="bi bi-mortarboard-fill"></i> École Management</h5>
                    <p class="text-light">Système de gestion moderne pour établissements scolaires</p>
                </div>
                <div class="col-md-4">
                    <h5>Liens Rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                       <!-- <li><a href="{{ route('frontend.students') }}" class="text-light text-decoration-none">Étudiants</a></li>-->
                        <li><a href="{{ route('frontend.cours') }}" class="text-light text-decoration-none">Cours</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p class="text-light">
                        <i class="bi bi-envelope"></i> contact@ecole.tn<br>
                        <i class="bi bi-telephone"></i> +216 XX XXX XXX
                    </p>
                </div>
            </div>
            <hr class="bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} École Management. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
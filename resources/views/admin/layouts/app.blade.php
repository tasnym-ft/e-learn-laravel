<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestion Étudiants</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #e2e8f9ff;
        }
        .sidebar {
            height: 100vh;
            width: 230px;
            position: fixed;
            top: 0;
            left: 0;
            background: #2c3e50;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 25px;
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            font-size: 16px;
        }
        .sidebar a:hover {
            background: #34495e;
        }
        .content {
            margin-left: 250px;
            padding: 25px;
        }
        .navbar-custom {
            background: #16293eff;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-custom fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            🎓 Gestion des Étudiants
        </a>
    </div>
</nav>

<!-- SIDEBAR -->
<div class="sidebar">

    <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
    <a href="{{ route('students.index') }}">👨‍🎓 Liste Étudiants</a>
    <a href="{{ route('students.create') }}">➕ Ajouter Étudiant</a>
    <a href="{{ route('enseignants.index') }}">👩‍🏫 Liste Enseignant</a>
    <a href="{{ route('enseignants.create') }}">➕ Ajouter Enseignant</a>

</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

</body>
</html>

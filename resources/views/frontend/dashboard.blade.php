@extends('frontend.layout')

@section('title', 'Accueil')

@section('content')
<!-- HERO SECTION -->
<div class="hero-section">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-4">Bienvenue à École Des Langues</h1>
        <p class="lead mb-4">Progressez chaque jour avec nos cours de langues adaptés à tous les niveaux</p>
        <!-- <a href="{{ route('frontend.students') }}" class="btn btn-light btn-lg me-2">
            <i class="bi bi-people"></i> Voir les Étudiants
        </a>-->
       
        <a href="{{ route('frontend.cours') }}" class="btn btn-outline-light btn-lg">
            <i class="bi bi-person-workspace"></i> Voir les langues disponibles
</a>
    </div>
</div>

<div class="container">
    <!-- STATISTIQUES -->
    <div class="row mb-5">
        <div class="col-md-4 mb-3">
            <div class="card text-center p-4">
                <div class="display-4 text-primary mb-3">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h3 class="fw-bold">{{ \App\Models\Student::count() }}</h3>
                <p class="text-muted">Étudiants Inscrits</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center p-4">
                <div class="display-4 text-success mb-3">
                    <i class="bi bi-person-workspace"></i>
                </div>
                <h3 class="fw-bold">{{ \App\Models\Enseignant::count() }}</h3>
                <p class="text-muted">Enseignants Qualifiés</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center p-4">
                <div class="display-4 text-warning mb-3">
                    <i class="bi bi-book-fill"></i>
                </div>
                <h3 class="fw-bold">50+</h3>
                <p class="text-muted">Cours Disponibles</p>
            </div>
        </div>
    </div>
    

   
@endsection

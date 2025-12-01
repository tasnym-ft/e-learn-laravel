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

    <!-- ÉTUDIANTS RÉCENTS 
    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Étudiants Récents</h2>
            <a href="{{ route('frontend.students') }}" class="btn btn-primary">
                Voir Tous <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        
        <div class="row">
            @foreach($students as $student)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 50px; height: 50px; font-size: 24px;">
                                {{ substr($student->name, 0, 1) }}
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">{{ $student->name }}</h5>
                                <small class="text-muted">
                                    <i class="bi bi-envelope"></i> {{ $student->email }}
                                </small>
                            </div>
                        </div>
                        @if($student->phone)
                        <p class="mb-2">
                            <i class="bi bi-telephone"></i> {{ $student->phone }}
                        </p>
                        @endif
                        <a href="{{ route('frontend.student.show', $student->id) }}" 
                           class="btn btn-sm btn-outline-primary w-100 mt-2">
                            Voir Profil <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

   ENSEIGNANTS RÉCENTS 
    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Enseignants Récents</h2>
            <a href="{{ route('frontend.enseignants') }}" class="btn btn-primary">
                Voir Tous <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        
        <div class="row">
            @foreach($enseignants as $enseignant)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 50px; height: 50px; font-size: 24px;">
                                {{ substr($enseignant->nom, 0, 1) }}
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-0">{{ $enseignant->nom }}</h5>
                                @if($enseignant->specialite)
                                <small class="text-muted">
                                    <i class="bi bi-award"></i> {{ $enseignant->specialite }}
                                </small>
                                @endif
                            </div>
                        </div>
                        <p class="mb-2">
                            <i class="bi bi-envelope"></i> {{ $enseignant->email }}
                        </p>
                        <a href="{{ route('frontend.enseignant.show', $enseignant->id) }}" 
                           class="btn btn-sm btn-outline-success w-100 mt-2">
                            Voir Profil <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

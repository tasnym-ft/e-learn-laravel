  <!--@extends('frontend.layout')

@section('title', 'Liste des Étudiants')

@section('content')
<div class="hero-section py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">
            <i class="bi bi-people-fill"></i> Nos Étudiants
        </h1>
        <p class="lead">Découvrez les étudiants de notre établissement</p>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        @forelse($students as $student)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" 
                             style="width: 60px; height: 60px; font-size: 28px;">
                            {{ substr($student->name, 0, 1) }}
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1 fw-bold">{{ $student->name }}</h5>
                            <small class="text-muted">ID: #{{ $student->id }}</small>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <p class="mb-2">
                            <i class="bi bi-envelope text-primary"></i> 
                            <small>{{ $student->email }}</small>
                        </p>
                        @if($student->phone)
                        <p class="mb-2">
                            <i class="bi bi-telephone text-success"></i> 
                            <small>{{ $student->phone }}</small>
                        </p>
                        @endif
                        @if($student->address)
                        <p class="mb-2">
                            <i class="bi bi-geo-alt text-danger"></i> 
                            <small>{{ $student->address }}</small>
                        </p>
                        @endif
                        @if($student->birthdate)
                        <p class="mb-2">
                            <i class="bi bi-calendar text-warning"></i> 
                            <small>{{ \Carbon\Carbon::parse($student->birthdate)->format('d/m/Y') }}</small>
                        </p>
                        @endif
                    </div>
                    
                    <a href="{{ route('frontend.student.show', $student->id) }}" 
                       class="btn btn-outline-primary w-100">
                        Voir le Profil <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                <i class="bi bi-info-circle"></i> Aucun étudiant trouvé
            </div>
        </div>
        @endforelse
    </div>

    PAGINATION 
    <div class="d-flex justify-content-center mt-4">
        {{ $students->links() }}
    </div>
</div>
@endsection
-->


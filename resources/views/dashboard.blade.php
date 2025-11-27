@extends('layouts.app')

@section('content')

<h1 class="mt-5 mb-4">Bienvenue dans votre Dashboard</h1>

<div class="row">

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h4>Total Étudiants</h4>
            <p class="fs-4 fw-bold">{{ \App\Models\Student::count() }}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h4>Dernier Étudiant ajouté</h4>
            <p class="fw-bold">
                {{ optional(\App\Models\Student::latest()->first())->name ?? 'Aucun' }}
            </p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h4>Actions rapides</h4>
            <a href="{{ route('students.create') }}" class="btn btn-primary w-100 mb-2">Ajouter Étudiant</a>
            <a href="{{ route('students.index') }}" class="btn btn-success mb-2">liste étudiants</a>
        </div>
    </div>
<div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h4>Total Enseignant</h4>
            <p class="fs-4 fw-bold">{{ \App\Models\Enseignant::count() }}</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm p-3">
            <h4>Dernier Enseignant ajouté</h4>
            <p class="fw-bold">
                {{ optional(\App\Models\Enseignant::latest()->first())->name ?? 'Aucun' }}
            </p>
        </div>
    </div>
        <div class="col-md-4">
        <div class="card shadow-sm p-3">
             <h4>Actions rapides</h4>
        <a href="{{ route('enseignants.create') }}" class="btn btn-primary mb-2">Ajouter des Enseignants</a>
        <a href="{{ route('enseignants.index') }}" class="btn btn-success mb-2">liste Enseignant</a>
    </div>
    </div>

    </div>


</div>

@endsection

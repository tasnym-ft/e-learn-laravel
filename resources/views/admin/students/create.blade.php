@extends('layouts.app')

@section('content')
<h2>Ajouter Étudiant</h2>

<form action="{{ route('students.store') }}" method="POST" class="mt-3">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Téléphone</label>
        <input type="text" name="phone" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Adresse</label>
        <input type="text" name="address" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Date de naissance</label>
        <input type="date" name="birthdate" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
</form>
@endsection

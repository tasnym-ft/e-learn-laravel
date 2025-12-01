@extends('layouts.app')

@section('content')
<h2 class="mt-5 mb-4">Modifier Étudiant</h2>

<form action="{{ route('students.update', $student->id) }}" method="POST" class="mt-3">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="name" class="form-control" value="{{ $student->name }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $student->email }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Téléphone</label>
        <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Adresse</label>
        <input type="text" name="address" class="form-control" value="{{ $student->address }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Date de naissance</label>
        <input type="date" name="birthdate" class="form-control" value="{{ $student->birthdate }}">
    </div>

    <button type="submit" class="btn btn-warning">Mettre à jour</button>
</form>
@endsection

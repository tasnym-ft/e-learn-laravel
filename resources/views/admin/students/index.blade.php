@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2 class="mt-5 mb-4">Liste des Étudiants</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary">+ Ajouter Étudiant</a>
</div>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">Voir</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-5 mb-4">Liste des Enseignants</h2>

    <!-- Bouton pour ajouter un enseignant -->
    <a href="{{ route('enseignants.create') }}" class="btn btn-success mb-3">Ajouter Enseignant</a>

    <!-- Tableau des enseignants -->
    <table class="table table-bordered">
        <thead>
            <tr>
            
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enseignants as $enseignant)
            <tr>
                <td>{{ $enseignant->nom }}</td>
                <td>{{ $enseignant->email }}</td>
               
                <td>{{ $enseignant->telephone }}</td>
                <td>{{ $enseignant->specialite }}</td>
                 <td>{{ $enseignant->action }}</td>
                <td>
                    <a href="{{ route('enseignants.edit', $enseignant->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('enseignants.destroy', $enseignant->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

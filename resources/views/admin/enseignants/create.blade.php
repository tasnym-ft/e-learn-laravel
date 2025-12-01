@extends('layouts.app')

@section('content')
<h3 class="mt-5 mb-4">Ajouter un Enseignant</h3>
    <form action="{{ route('enseignants.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom complet">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <label>Téléphone</label>
            <input type="text" name="phone" class="form-control" placeholder="Téléphone">
        </div>
        <div class="mb-3">
            <label>Spécialité</label>
            <input type="text" name="specialite" class="form-control" placeholder="Spécialité">
        </div>
        <div class="mb-3">
            <label>Actions</label>
            <input type="text" name="action" class="form-control" placeholder="action">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

</div>
@endsection
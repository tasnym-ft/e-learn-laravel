<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    // Affiche la liste des enseignants
    public function index()
    {
        $enseignants = Enseignant::all(); // récupère tous les enseignants
        return view('enseignants.index', compact('enseignants')); // <-- corrige ici
    }

    // Formulaire pour ajouter un nouvel enseignant
    public function create()
    {
        return view('enseignants.create');
    }

    // Enregistre un nouvel enseignant
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email',
            'telephone' => 'nullable|string|max:20',
            'specialite' => 'nullable|string|max:255',
            'action' => 'nullable|string|max:255',
        ]);

        Enseignant::create($request->all());

        return redirect()->route('enseignants.index')
                         ->with('success', 'Enseignant ajouté avec succès !');
    }

    // Affiche un enseignant (optionnel)
    public function show(Enseignant $enseignant)
    {
        return view('enseignants.show', compact('enseignant'));
    }

    // Formulaire pour modifier un enseignant
    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit', compact('enseignant'));
    }

    // Met à jour un enseignant
    public function update(Request $request, Enseignant $enseignant)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $enseignant->id,
            'telephone' => 'nullable|string|max:20',
            'specialite' => 'nullable|string|max:255',
            'action' => 'nullable|string|max:255',
        ]);

        $enseignant->update($request->all());

        return redirect()->route('enseignants.index')
                         ->with('success', 'Enseignant mis à jour avec succès !');
    }

    // Supprime un enseignant
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();

        return redirect()->route('enseignants.index')
                         ->with('success', 'Enseignant supprimé avec succès !');
    }
}

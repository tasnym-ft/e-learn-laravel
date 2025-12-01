<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    // Liste tous les étudiants
    public function index()
    {
        $students = Student::all(); // ou paginate(10)
        return view('students.index', compact('students'));
    }

    // Formulaire pour créer un étudiant
    public function create()
    {
        return view('students.create');
    }

    // Enregistrer un nouvel étudiant
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Étudiant ajouté avec succès !');
    }

    // Afficher les détails d'un étudiant
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Formulaire pour modifier un étudiant
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Mettre à jour un étudiant
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'birthdate' => 'nullable|date',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Étudiant mis à jour avec succès !');
    }

    // Supprimer un étudiant
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Étudiant supprimé avec succès !');
    }
}

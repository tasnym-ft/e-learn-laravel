<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    // Page liste des étudiants
    public function students()
    {
        $students = Student::paginate(12);
        return view('admin.students', compact('students'));
    }

    // Page détail d'un étudiant
    public function studentShow($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student-index', compact('student'));
    }

    // Page liste des enseignants
    public function enseignants()
    {
        $enseignants = Enseignant::paginate(12);
        return view('admin.enseignants', compact('enseignants'));
    }

    // Page détail d'un enseignant
    public function enseignantShow($id)
    {
        $enseignant = Enseignant::findOrFail($id);
        return view('admin.enseignant-index', compact('enseignant'));
    } 

    
}
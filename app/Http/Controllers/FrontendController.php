<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Page d'accueil
    public function home()
    {
        $students = Student::latest()->take(6)->get();
        $enseignants = Enseignant::latest()->take(6)->get();
        
        return view('frontend.home', compact('students', 'enseignants'));
    }

    // Page liste des étudiants
   // public function students()
    //{
       // $students = Student::paginate(12);
        //return view('frontend.students', compact('students'));
   /// }

    
    // Page à propos
    public function about()
    {
        return view('frontend.about');
    }
     // Page cours
    public function cours()
    {
        return view('frontend.cours');
    }

    // Page contact
    public function contact()
    {
        return view('frontend.contact');
    }
}
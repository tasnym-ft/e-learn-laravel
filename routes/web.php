<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnseignantController;




Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// CRUD complet pour les étudiants
Route::resource('students', StudentController::class);

Route::resource('enseignants', EnseignantController::class);




<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// ============================================
// ROUTES PUBLIQUES (Frontend)
// ============================================
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/etudiants', [FrontendController::class, 'students'])->name('frontend.students');
Route::get('/etudiant/{id}', [FrontendController::class, 'studentShow'])->name('frontend.student.show');
Route::get('/enseignants-list', [FrontendController::class, 'enseignants'])->name('frontend.enseignants');
Route::get('/enseignant/{id}', [FrontendController::class, 'enseignantShow'])->name('frontend.enseignant.show');
Route::get('/a-propos', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/cours', [FrontendController::class, 'cours'])->name('frontend.cours');


// ============================================
// AUTHENTIFICATION UTILISATEUR
// ============================================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');


// ============================================
// PROFIL UTILISATEUR (Espace perso)
// ============================================
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])
        ->name('dashboard');
});


// ============================================
// ROUTES ADMIN (Protégées par middleware admin)
// ============================================
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // Dashboard admin
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
  

    // CRUD Complet pour les étudiants
    Route::resource('/students', StudentController::class);

    // CRUD Complet pour les enseignants
    Route::resource('/enseignants', EnseignantController::class);
});


// Routes Laravel Breeze / Auth
require __DIR__.'/auth.php';

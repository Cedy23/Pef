<?php

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Controllers\Auth\ProfessorLoginController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

// Page d'accueil
Route::get('/', function () {
    return view('home');
});

// Routes pour les informations de l'université
Route::get('/formations', function () {
    return view('formations');
})->name('formations');

Route::get('/brochures', function () {
    return view('brochures');
})->name('brochures');

// Inscription des utilisateurs
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Connexion et tableau de bord des étudiants
Route::get('/student/login', [StudentLoginController::class, 'showLoginForm'])->name('student.login');
Route::post('/student/login', [StudentLoginController::class, 'login']);
Route::middleware('auth:student')->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
    Route::post('/student/logout', [StudentController::class, 'logout'])->name('student.logout');
});

// Connexion et tableau de bord des professeurs
Route::get('/professor/login', [ProfessorLoginController::class, 'showLoginForm'])->name('professor.login');
Route::post('/professor/login', [ProfessorLoginController::class, 'login']);
Route::middleware('auth:professor')->group(function () {
    Route::get('/professor/dashboard', [ProfessorController::class, 'dashboard'])->name('professor.dashboard');
    Route::post('/professor/logout', [ProfessorController::class, 'logout'])->name('professor.logout');
});

//Route Admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/upload-student-schedule', [AdminController::class, 'uploadStudentSchedule'])->name('admin.uploadStudentSchedule');
    Route::post('/admin/upload-professor-schedule', [AdminController::class, 'uploadProfessorSchedule'])->name('admin.uploadProfessorSchedule');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

//Route Admin login
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);

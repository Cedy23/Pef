<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function uploadStudentSchedule(Request $request)
{
    $request->validate([
        'studentSchedule' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Supprimer l'ancienne image si elle existe
    if (Storage::exists('public/student-schedule.jpg')) {
        Storage::delete('public/student-schedule.jpg');
    }

    // Enregistrer la nouvelle image
    $path = $request->file('studentSchedule')->storeAs('public', 'student-schedule.jpg');

    return back()->with('success', 'Emploi du temps des étudiants importé avec succès.');
}

    public function uploadProfessorSchedule(Request $request)
    {
        $request->validate([
            'professorSchedule' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Supprimer l'ancienne image si elle existe
        if (Storage::exists('public/professor-schedule.jpg')) {
            Storage::delete('public/professor-schedule.jpg');
        }

        // Enregistrer la nouvelle image
        $request->file('professorSchedule')->storeAs('public', 'professor-schedule.jpg');

        return back()->with('success', 'Planning des professeurs importé avec succès.');
    }

    public function index()
    {
        return view('admin.admin-dashboard');
    }

    public function logout(Request $request)
{
    Auth::guard('admin')->logout(); // Déconnexion de l'administrateur
    $request->session()->invalidate(); // Invalider la session
    $request->session()->regenerateToken(); // Régénérer le token CSRF

    return redirect()->route('admin.login'); // Rediriger vers la page de connexion
}
}

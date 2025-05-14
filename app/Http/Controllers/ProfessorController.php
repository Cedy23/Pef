<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function dashboard()
    {
        $scheduleImage = 'schedules/professor-schedule.jpg'; // Exemple de chemin d'image
        return view('auth.professor-dashboard', compact('scheduleImage'));
    }

    /**
     * Handle the logout for professors.
     */
    public function logout(Request $request)
    {
        auth('professor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('professor.login');
    }
}

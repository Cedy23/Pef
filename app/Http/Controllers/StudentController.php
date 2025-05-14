<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        $scheduleImage = 'schedules/today-schedule.jpg'; // Exemple de chemin d'image
        return view('auth.student-dashboard', compact('scheduleImage'));
    }

    /**
     * Handle student logout.
     */
    public function logout(Request $request)
    {
        auth()->guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

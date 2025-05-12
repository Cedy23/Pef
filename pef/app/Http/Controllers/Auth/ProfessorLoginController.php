<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.professor-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('professor')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('professor.dashboard');
        }

        return back()->withErrors([
            'email' => 'Les informations d’identification ne sont pas valides.',
        ])->withInput($request->only('email', 'remember'));
    }
}

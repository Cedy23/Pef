<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.student-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('student')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors([
            'email' => 'Les informations d’identification ne sont pas valides.',
        ])->withInput($request->only('email', 'remember'));
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
{
    $credentials = $request->only('email', 'password');

    // Attempt authentication for Candidat
    if (Auth::guard('candidat')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('candidats.index')->with('success', 'You are logged in as Candidat');
    }

    // Attempt authentication for Recruteur
    if (Auth::guard('recruteur')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('recruteurs.index')->with('success', 'You are logged in as Recruteur');
    }
       // Attempt authentication for admin
       if (Auth::guard('admin')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('admins.index')->with('success', 'You are logged in as an admin');
    }

    // Authentication failed for both Candidat and Recruteur
    return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
}

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

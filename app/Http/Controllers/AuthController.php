<?php

namespace App\Http\Controllers;

use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use LogsActivity;

    public function verify_auth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(credentials: $validated, remember: $request->boolean('remember'))) {
            // Prevent session fixation
            $request->session()->regenerate();

            // Log successful login
            $this->logLogin(Auth::user());

            return redirect()->intended(route('admin.dashboard'));
        } else {
            return back()->withErrors([
                'error' => 'Incorrect email or password. Please try again.',
            ])->withInput($request->only('email', 'remember'));
        }
    }

    public function logout(Request $request)
    {
        // Log logout before logging out
        $this->logLogout();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');
    }
}

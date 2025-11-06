<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\LogsActivity;

class AuthController extends Controller
{
    use LogsActivity;
    public function verify_auth(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt(credentials: $validated)){
            // Log successful login
            $this->logLogin(Auth::user());
            
            return to_route('admin.dashboard');
        }else{
            return back()->withErrors([
                'error' => 'Incorrect Username Or Password'
            ])->withInput();
        }
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password'])
        ]);

        if($user){
            Auth::login($user);
            
            // Log registration and login
            $this->logActivity('register', "New user {$user->name} registered", $user);
            $this->logLogin($user);
            
            return to_route('admin.dashboard');
        }else{
            return back()->withErrors([
                'error' => 'Registration Failed, Please Try Again'
            ])->withInput();
        }
    }

    public function logout(Request $request){
        // Log logout before logging out
        $this->logLogout();
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}

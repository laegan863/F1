<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function verify_auth(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt(credentials: $validated)){
            return to_route('admin.dashboard');
        }else{
            return back()->withErrors([
                'error' => 'Incorrect Username Or Password'
            ])->withInput();
        }
    }
}

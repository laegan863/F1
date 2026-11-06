<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

/** The signed-in user's own account: details and password. */
class ProfileController extends Controller
{
    use LogsActivity;

    public function show()
    {
        $user = Auth::user();

        $recentLogins = ActivityLog::where('user_id', $user->id)
            ->where('action', 'login')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.files.profile', compact('user', 'recentLogins'));
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $data = $request->validateWithBag('profile', [
            'name'  => ['required', 'string', 'max:255', Rule::unique('users', 'name')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
        ]);

        $user->fill($data);

        if (!$user->isDirty()) {
            return to_route('profile.show')->with('success', 'No changes to save.');
        }

        $changes = ['old' => array_intersect_key($user->getOriginal(), $user->getDirty()), 'new' => $user->getDirty()];
        $user->save();

        $this->logUpdate($user, "Updated own profile ({$user->email})", $changes);

        return to_route('profile.show')->with('success', 'Your profile has been updated.');
    }

    public function updatePassword(Request $request)
    {
        $request->validateWithBag('password', [
            'current_password' => ['required', 'current_password'],
            'password'         => ['required', 'confirmed', 'different:current_password', Password::min(8)->letters()->numbers()],
        ], [
            'current_password.current_password' => 'Your current password is incorrect.',
            'password.different'                 => 'The new password must be different from your current password.',
        ]);

        $user = $request->user();
        $user->password = $request->password;   // hashed by the model's "hashed" cast
        $user->save();

        // Keep this session signed in, with a fresh ID and CSRF token
        $request->session()->regenerate();
        $request->session()->regenerateToken();

        $this->logActivity('update', "Changed own password ({$user->email})", $user);

        return to_route('profile.show')->with('success', 'Your password has been changed.');
    }
}

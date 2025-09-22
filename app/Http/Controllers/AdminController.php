<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Demographicprofile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function delete($id, $table)
    {
        DB::table($table)->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Record deleted successfully.');
    }

    public function dashboard() {
        $totalRecords = Demographicprofile::count();
        $totalUsers = User::count();
        return view('admin.files.dashboard', compact('totalRecords', 'totalUsers'));
    }

    public function records(){
        $data = Demographicprofile::where('status', 1)
                ->orderBy('id', 'desc')
                ->get();
        return view('admin.files.records', compact('data'));
    }

    public function users() {
        $data = User::orderBy('id', 'desc')->get();
        return view('admin.files.users', compact('data'));
    }

    public function add_user(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:admin,user',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User added successfully.');
    }

    public function edit(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|in:admin,user',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->role = $request->role;
        $user->save();

        return to_route('admin.users')->with('success', 'User updated successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User; // Assuming you have a User model
use App\Models\Education;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Show the admin dashboard
    public function dashboard()
    {
        // Here you can fetch any data you want to display on the dashboard
        $userCount = User::count(); 
        $educationCount = Education::count();
        $projectCount = Project::count();
        return view('admin.dashboard', compact('userCount','educationCount','projectCount'));
    }

    // Show the user management page
    public function users()
    {
        $users = User::all(); // Fetch all users
        return view('admin.users.index', compact('users'));
    }

    // Show the form to create a new user
    public function createUser()
    {
        return view('admin.users.create');
    }

    // Store a new user
    public function storeUser(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    // Show the form to edit a user
    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    // Update an existing user
    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'role' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->role = $request->role;

        // Only update password if it's provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    // Delete a user
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}

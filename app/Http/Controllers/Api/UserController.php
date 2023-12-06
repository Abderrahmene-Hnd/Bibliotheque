<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function storeClient(Request $request)
    {
        $request->validate([
            'username' => 'required | min:3 | max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $client = User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => (request('password')),
            'role_id' => 3
        ]);
        return response()->json($client);
    }
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required | min:3 | max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required | min:5 | max:255',
            'role_id' => 'required'
        ]);
        $admin = User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => request('password'),
            'role_id' => request('role_id')
        ]);

        return response()->json($admin);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required | min:3 | max:255',
            'email' => 'required|email',
            'password' => 'required | min:5 | max:255',
            'role_id' => 'required'
        ]);
        $user = User::find($id);
        $user->update([
            'username' => request('username'),
            'email' => request('email'),
            'password' => (request('password')),
            'role_id' => request('role_id')
        ]);
        return response()->json($user);
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json(['success' => 'User deleted']);
    }

    public function login()
    {
        request()->validate([
            'email' => 'required | email',
            'password' => 'required | min:5 | max:255',
        ]);
        $user = User::where('email', request('email'))->first();

        if ($user && password_verify(request('password'), $user->password)) {
            auth()->login($user);
            return response()->json([
                $user,
                'message' => 'User logged In'
            ]);
        } else {
            return response()->json(['message' => 'Invalid email or Password'], 401);
        }
    }
    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User logged out']);
    }

}

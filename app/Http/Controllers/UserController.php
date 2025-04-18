<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $users = User::whereNull('deleted_at')->orderBy('id')->get();
        return view('data', compact('users'));
    }

    public function create()
    {
        return view('form', ['user' => null]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('form', compact('user'));
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'nullable|min:6',
        'gender' => 'required|in:Male,Female',
        'birthday' => 'required|date',
        ]);

        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->only(['name', 'email', 'gender', 'birthday']);
        $data['status'] = $request->has('status') ? 1 : 0;

        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        if ($request->id) {
            $user = User::findOrFail($request->id);
            $user->update($data);
        } else {
            $data['created_at'] = now();
            User::create($data);
        }

        return redirect()->route('data')->with('success', 'User data saved successfully.');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->deleted_at = now(); // Soft delete
        $user->save();

        return redirect()->route('data')->with('success', 'User deleted successfully.');
    }
}

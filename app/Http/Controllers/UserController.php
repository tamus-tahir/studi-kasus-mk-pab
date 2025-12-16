<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index', [
            'title' => 'User',
            'users' => User::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create', [
            'title' => 'Create User',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'password' => 'required|min:8',
            'passwordconfirm' => 'required|same:password',
            'email' => 'required|email|lowercase|unique:users,email',
            'avatar' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:512'
        ]);

        if ($request->file('avatar')) {
            $validate['avatar'] = $request->file('avatar')->store('img', 'public');
        }

        $validate['password'] = bcrypt($request->password);
        $validate['email_verified_at'] = now();
        User::create($validate);
        return to_route('user.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', [
            'title' => 'Detail User',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', [
            'title' => 'Edit User',
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'password' => 'nullable|min:8',
            'passwordconfirm' => 'nullable|same:password',
            'email' => 'required|email|lowercase|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:512'
        ]);

        if ($request->file('avatar')) {
            $validate['avatar'] = $request->file('avatar')->store('img', 'public');
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
        }

        if ($user->password) {
            $validate['password'] = bcrypt($request->password);
        } else {
            unset($validate['password']);
        }
        $user->update($validate);
        return to_route('user.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }
        return to_route('user.index')->withSuccess('Data berhasil dihapus');
    }
}

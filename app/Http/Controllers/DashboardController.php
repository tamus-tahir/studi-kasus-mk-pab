<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
        ]);
    }

    public function show()
    {
        return view('dashboard.show', [
            'title' => 'My Profile',
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('dashboard.edit', [
            'title' => 'Edit Profile',
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validate = $request->validate([
            'name' => 'required',
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

        if ($request->password) {
            $validate['password'] = bcrypt($request->password);
        } else {
            unset($validate['password']);
        }
        $user->update($validate);
        return to_route('dashboard.show')->withSuccess('Data berhasil diubah');
    }
}

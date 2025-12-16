<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('setting.index', [
            'title' => 'Setting',
            'setting' => Setting::first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $validate = $request->validate([
            'app_name' => 'required',
            'copyright' => 'required',
            'login_title' => 'required',
            'keywords' => 'nullable',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:512'
        ]);

        if ($request->file('logo')) {
            $validate['logo'] = $request->file('logo')->store('img', 'public');
            if ($setting->logo) {
                Storage::disk('public')->delete($setting->logo);
            }
        }

        $setting->update($validate);
        return to_route('setting.index')->withSuccess('Data berhasil disimpan');
    }
}

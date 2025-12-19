<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('slide.index', [
            'title' => 'Slide',
            'slides' => Slide::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slide.create', [
            'title' => 'Create Slide',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button' => 'required',
            'link' => 'required',
            'order' => 'required|integer',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:512'
        ]);

        $validate['image'] = $request->file('image')->store('slide', 'public');
        Slide::create($validate);
        return to_route('slide.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {
        return view('slide.show', [
            'title' => 'Detail Slide',
            'slide' => $slide,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        return view('slide.edit', [
            'title' => 'Edit Slide',
            'slide' => $slide,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slide $slide)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'button' => 'required',
            'link' => 'required',
            'order' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:512'
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('slide', 'public');
            if ($slide->image) {
                Storage::disk('public')->delete($slide->image);
            }
        }

        $slide->update($validate);
        return to_route('slide.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slide $slide)
    {
        $slide->delete();
        if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
        }
        return to_route('slide.index')->withSuccess('Data berhasil dihapus');
    }
}

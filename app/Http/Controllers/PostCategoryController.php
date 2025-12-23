<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('postcategory.index', [
            'title' => 'Kategori Berita',
            'postcategories' => PostCategory::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postcategory.create', [
            'title' => 'Tambah Kategori Berita',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|unique:post_categories,title',
        ]);

        $validate['slug'] = Str::slug($validate['title']);

        PostCategory::create($validate);
        return to_route('postcategory.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostCategory $postcategory)
    {
        return view('postcategory.edit', [
            'title' => 'Edit Kategori Berita',
            'postcategory' => $postcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostCategory $postcategory)
    {
        $validate = $request->validate([
            'title' => 'required|string|unique:post_categories,title,' . $postcategory->id,
        ]);

        $validate['slug'] = Str::slug($validate['title']);

        $postcategory->update($validate);
        return to_route('postcategory.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCategory $postcategory)
    {
        $postcategory->delete();
        return to_route('postcategory.index')->withSuccess('Data berhasil dihapus');
    }
}

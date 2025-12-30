<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('post.index', [
            'title' => 'Berita',
            'posts' => Post::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', [
            'title' => 'Tambah Berita',
            'postcategories' => PostCategory::latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'post_category_id' => 'required',
            'title' => 'required',
            'post_date' => 'required|date',
            'publish' => 'required',
            'content' => 'required',
            'cover' => 'required|image|mimes:png,jpg,jpeg,svg|max:512'
        ]);

        $validate['cover'] = $request->file('cover')->store('post', 'public');
        $validate['slug'] = Str::slug($validate['title']);
        Post::create($validate);
        return to_route('post.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', [
            'title' => 'Detail Berita',
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

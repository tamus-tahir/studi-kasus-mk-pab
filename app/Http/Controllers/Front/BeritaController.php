<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('front.berita.index', [
            'title' => 'Berita',
            'posts' => Post::orderBy('post_date', 'desc')->where('publish', 'Yes')->paginate(2)
        ]);
    }
}

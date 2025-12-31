<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->input('keyword');
        $category = $request->input('category');

        $posts = Post::query()
            ->where('publish', 'Yes')
            ->when($keyword, function ($query, $keyword) {
                $query->where('title', 'like', "%$keyword%");
            })
            ->when($category, function ($query, $category) {
                $query->whereHas('postCategory', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->orderBy('post_date', 'desc')
            ->paginate(2)
            ->appends([
                'keyword' => $keyword,
                'category' => $category,
            ]);

        return view('front.berita.index', [
            'title' => 'Berita',
            'totalPost' => Post::where('publish', 'Yes')->count(),
            'posts' => $posts,
            'recents' => Post::orderBy('post_date', 'desc')->where('publish', 'Yes')->limit(3)->get(),
            'categories'  => PostCategory::withCount(['posts' => function ($query) {
                $query->where('publish', 'Yes');
            }])->get()
        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('front.berita.show', [
            'title' => $post->title,
            'post' => $post,
            'totalPost' => Post::where('publish', 'Yes')->count(),
            'recents' => Post::orderBy('post_date', 'desc')->where('publish', 'Yes')->limit(3)->get(),
            'categories'  => PostCategory::withCount(['posts' => function ($query) {
                $query->where('publish', 'Yes');
            }])->get()
        ]);
    }
}

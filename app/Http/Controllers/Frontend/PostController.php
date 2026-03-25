<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $q = $request->input('q');

        $posts = Post::query()
            ->with(['user', 'categories', 'media'])
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->search($q ?? '')
            ->latest('published_at')
            ->paginate(12)
            ->withQueryString();

        $categories = Category::query()
            ->withCount([
                'posts' => function ($query) {
                    $query->where('is_published', true)
                        ->whereNotNull('published_at')
                        ->where('published_at', '<=', now());
                },
            ])
            ->having('posts_count', '>', 0)
            ->orderByDesc('posts_count')
            ->take(6)
            ->get();

        return view('frontend.posts.index', [
            'posts' => $posts,
            'categories' => $categories,
            'q' => $q,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): View
    {
        if (! $post->is_published || ! $post->published_at || $post->published_at->isFuture()) {
            abort(404);
        }

        $post->load(['user', 'categories', 'media']);

        return view('frontend.posts.show', [
            'post' => $post,
        ]);
    }
}

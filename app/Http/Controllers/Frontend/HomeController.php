<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {

        $featuredPosts = Post::query()
            ->with(['user', 'categories', 'media'])
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('is_featured')
            ->latest('published_at')
            ->take(4)
            ->get();

        $featuredIds = $featuredPosts->pluck('id');


        $latestPosts = Post::query()
            ->with(['user', 'categories', 'media'])
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->whereNotIn('id', $featuredIds)
            ->latest('published_at')
            ->take(8)
            ->get();

        $latestIds = $latestPosts->pluck('id');
        $allUsedIds = $featuredIds->merge($latestIds);


        $categoryPosts = Post::query()
            ->with(['user', 'categories', 'media'])
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->whereNotIn('id', $allUsedIds)
            ->latest('published_at')
            ->take(10)
            ->get();

        $categoryIds = $categoryPosts->pluck('id');
        $allUsedIds = $allUsedIds->merge($categoryIds);


        $videoPosts = Post::query()
            ->with(['user', 'categories', 'media'])
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->whereNotIn('id', $allUsedIds)
            ->latest('published_at')
            ->take(8)
            ->get();

        $videoIds = $videoPosts->pluck('id');
        $allUsedIds = $allUsedIds->merge($videoIds);


        $editorialPosts = Post::query()
            ->with(['user', 'categories', 'media'])
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->whereNotIn('id', $allUsedIds)
            ->latest('published_at')
            ->take(4)
            ->get();

        $categories = Category::query()
            ->withCount([
                'posts' => function ($query) {
                    $query->where('is_published', true)
                        ->whereNotNull('published_at');
                },
            ])
            ->having('posts_count', '>', 0)
            ->orderByDesc('posts_count')
            ->take(6)
            ->get();

        return view('frontend.home', [
            'featuredPosts' => $featuredPosts,
            'latestPosts' => $latestPosts,
            'categoryPosts' => $categoryPosts,
            'videoPosts' => $videoPosts,
            'editorialPosts' => $editorialPosts,
            'categories' => $categories,
        ]);
    }
}

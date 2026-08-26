<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TravelPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelPostController extends Controller
{
    public function index()
    {
        $posts = TravelPost::with('categories')->latest()->get();

        return view('travel-posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('travel-posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'country' => 'required|max:255',
            'content' => 'required',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $categoryIds = $validated['category_ids'] ?? [];
        unset($validated['category_ids']);

        $validated['user_id'] = Auth::id();

        $travelPost = TravelPost::create($validated);

        $travelPost->categories()->sync($categoryIds);

        return redirect()->route('travel-posts.index');
    }

    public function show(TravelPost $travelPost)
    {
        $travelPost->load('categories');

        return view('travel-posts.show', compact('travelPost'));
    }

    public function edit(TravelPost $travelPost)
    {
        $categories = Category::orderBy('name')->get();

        $travelPost->load('categories');

        return view('travel-posts.edit', compact('travelPost', 'categories'));
    }

    public function update(Request $request, TravelPost $travelPost)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'country' => 'required|max:255',
            'content' => 'required',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        $categoryIds = $validated['category_ids'] ?? [];
        unset($validated['category_ids']);

        $travelPost->update($validated);

        $travelPost->categories()->sync($categoryIds);

        return redirect()->route('travel-posts.index');
    }

    public function destroy(TravelPost $travelPost)
    {
        $travelPost->delete();

        return redirect()->route('travel-posts.index');
    }
}
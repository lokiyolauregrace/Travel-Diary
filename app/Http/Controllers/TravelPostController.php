<?php

namespace App\Http\Controllers;

use App\Models\TravelPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelPostController extends Controller
{
    public function index()
    {
        $posts = TravelPost::latest()->get();

        return view('travel-posts.index', compact('posts'));
    }

    public function create()
    {
        return view('travel-posts.create');
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'title' => 'required|max:255',
        'country' => 'required|max:255',
        'content' => 'required',
    ]);
    $validated['user_id'] = Auth::id();

    TravelPost::create($validated);

    return redirect()->route('travel-posts.index');
}

    public function show(TravelPost $travelPost)
    {
        return view('travel-posts.show', compact('travelPost'));
    }

    public function edit(TravelPost $travelPost)
    {
        return view('travel-posts.edit', compact('travelPost'));
    }

    public function update(Request $request, TravelPost $travelPost)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'country' => 'required|max:255',
            'content' => 'required',
        ]);

        $travelPost->update($validated);

        return redirect()->route('travel-posts.index');
    }

    public function destroy(TravelPost $travelPost)
    {
        $travelPost->delete();

        return redirect()->route('travel-posts.index');
    }
}
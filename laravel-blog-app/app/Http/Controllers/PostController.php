<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => Auth::user()->id, // Explicitly using the Auth facade
            'title' => $request->title,
            'description' => $request->description
        ]);

        return back();
    }

    public function show($spostId)
    {
        $post = Post::findOrFail($spostId);
        return view('posts.show', compact('post'));
    }
}

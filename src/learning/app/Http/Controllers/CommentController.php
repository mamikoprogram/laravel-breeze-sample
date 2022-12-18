<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Thread $thread, Request $request)
    {
        $request->validate([
            'body' => 'required|string|max:512'
        ]);

        $thread->comments()->create([
            'body' => $request->body,
            'user_id' => $request->user()->id
        ]);

        return back();
    }
}

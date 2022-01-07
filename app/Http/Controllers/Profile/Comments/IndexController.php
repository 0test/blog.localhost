<?php

namespace App\Http\Controllers\Profile\Comments;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $comments = auth()->user()->comments;
        return view('profile.comments.index', compact('user','comments'));
    }
    
}

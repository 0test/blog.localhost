<?php

namespace App\Http\Controllers\Profile\Comments;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('profile.comments.edit', compact('comment'));
    }
    
}

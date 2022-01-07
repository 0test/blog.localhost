<?php

namespace App\Http\Controllers\Profile\Comments;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('profile.comments.index');
    }
    
}

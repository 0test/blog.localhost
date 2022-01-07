<?php

namespace App\Http\Controllers\Profile\Comments;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Comment\UpdateRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('profile.comments.index');
    }
    
}

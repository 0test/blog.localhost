<?php

namespace App\Http\Controllers\Profile\Comments;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        return view('profile.comments.index', compact('user'));
    }
    
}

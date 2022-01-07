<?php
namespace App\Http\Controllers\Profile\Main;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $likedPosts = auth()->user()->likedPosts;
        $comments = auth()->user()->comments;
        return view('profile.main.index', compact('user','likedPosts','comments'));
    }
    
}

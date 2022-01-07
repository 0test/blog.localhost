<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class RandomPostController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('post.show', Post::all()->random(1)->first()->id);
    }
    
}

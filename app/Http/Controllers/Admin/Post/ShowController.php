<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $category = Category::findOrFail($post->category_id);
        $comments = $post->comments;
        return view('admin.post.show', compact('post','category','comments'));
    }
    
}

<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        /*
        Storage::disk('public')->delete('images', $post->preview_image);
        Storage::disk('public')->delete('images', $post->main_image);
        $post->tags()->detach();
        */
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}

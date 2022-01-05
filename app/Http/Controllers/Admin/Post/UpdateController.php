<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {

        try {
            $data = $request->validated();
            $tagIds = $data['tags'];
            unset($data['tags']);
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::put('/blog_images', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::put('/blog_images', $data['main_image']);
            }
            $post->update($data);
            $post->tags()->detach();
            $post->tags()->attach($tagIds);
            return redirect()->route('admin.post.edit', $post->id);
        } catch (\Throwable $th) {
            abort(404);
        }
    }
}

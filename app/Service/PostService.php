<?php 
namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostService{
	public function store($data)
	{
		try {
            $tagIds= $data['tags'];
            unset($data['tags']);
            $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            $data['main_image'] = Storage::put('/images', $data['main_image']);
            $post = Post::create($data);
            $post->tags()->attach($tagIds);
        } catch (\Throwable $exeption) {
            abort(404);
        }	
	}
	public function update($data,$post)
	{
		try {
            $tagIds = $data['tags'];
            unset($data['tags']);
            if (isset($data['preview_image'])) {
                $data['preview_image'] = Storage::put('/blog_images', $data['preview_image']);
            }
            if (isset($data['main_image'])) {
                $data['main_image'] = Storage::put('/blog_images', $data['main_image']);
            }
            $post->update($data);
            $post->tags()->sync($tagIds);
        } catch (\Throwable $th) {
            abort(404);
        }
	}
}
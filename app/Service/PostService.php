<?php 
namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService{
	public function store($data)
	{
		try {
			DB::beginTransaction();
            if( isset($data['tags'])){
                $tagIds= $data['tags'];
                unset($data['tags']);
            }
            $data['preview_image'] = Storage::put('/images', $data['preview_image']);
            $data['main_image'] = Storage::put('/images', $data['main_image']);
            $post = Post::create($data);
            if( isset($tagIds)){
                $post->tags()->attach($tagIds);
            }
			DB::commit();
        } catch (\Throwable $exeption) {
			DB::rollBack();
            abort(500);
        }	
	}

	public function update($data, $post)
	{
		try {
			DB::beginTransaction();
            if( isset($data['tags'])){
                $tagIds= $data['tags'];
                unset($data['tags']);
            }
            if(isset($data['preview_image'])) {
                $data['preview_image'] = Storage::put('/blog_images', $data['preview_image']);
            }
            if(isset($data['main_image'])) {
                $data['main_image'] = Storage::put('/blog_images', $data['main_image']);
            }
            $post->update($data);
            if( isset($tagIds)){
                $post->tags()->sync($tagIds);
            }
			DB::commit();
        } catch (\Throwable $th) {
            abort(500);
			DB::rollBack();
        }
	}
}
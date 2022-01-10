<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'posts';
    protected $guarded = false;
    protected $withCount = ['likedUsers'];

    public function likedUsers(){
        return $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }
    public function getIntrotext($limit)
    {
        return Str::limit( $this->content, $limit);
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }

}

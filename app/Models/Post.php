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
}

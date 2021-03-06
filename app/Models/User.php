<?php

namespace App\Models;

use App\Notifications\SendVerifyNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    const ROLE_ADMIN = 99;
    const ROLE_READER = 0;

    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'post_user_likes','user_id','post_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'user_id');
    }
    public static function getRoles()
    {
        return[
            self::ROLE_ADMIN => 'Админ',
            self::ROLE_READER => 'Читатель'
        ];
    }
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified_at',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function SendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyNotification());
    }
}

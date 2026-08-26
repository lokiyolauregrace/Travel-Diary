<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\TravelPost;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'birthday',
        'bio',
        'profile_picture',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birthday' => 'date',
            'is_admin' => 'boolean',
        ];
    }

    /**
     * A user can create many travel posts.
     */
    public function travelPosts()
    {
        return $this->hasMany(TravelPost::class);
    }

    /**
     * A user can create many comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
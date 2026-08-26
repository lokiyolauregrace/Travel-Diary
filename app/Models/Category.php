<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * A category can belong to many travel posts.
     */
    public function travelPosts()
    {
        return $this->belongsToMany(TravelPost::class);
    }
}
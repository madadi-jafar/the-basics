<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    use HasFactory;

    // Define fillable attributes
    protected $fillable = ['name', 'slug', 'description'];

    // Define relationships if needed
    public function posts()
    {
        return $this->hasMany(Post::class); 
    }
}

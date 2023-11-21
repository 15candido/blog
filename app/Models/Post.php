<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'slug', 'excerpt', 'body'];

    // Search Method 
    public function scopeFilter($query, array $filters)
    {

        // Arrow function 
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%'));
    }

    // Relationships 
    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

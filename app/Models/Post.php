<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'slug', 'excerpt', 'body'];

    // Relationships 
    function category()
    {
        return $this->belongsTo(Category::class);
    }

    function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Search Method 
    public function scopeFilter($query, array $filters)
    {

        // Arrow function 
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            
            $query->where(fn($query) =>
            
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>

            $query->whereHas('category', fn($query) =>

                $query->where('slug', $category)
                
            )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
        
            $query->whereHas('author', fn($query) =>

                $query->where('username', $author)

            )
        );
    }
}

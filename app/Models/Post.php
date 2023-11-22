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
        $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) =>

            $query->whereHas('category', fn($query) =>

                $query->where('slug', $category)
                
            )
        );

        // $query->when($filters['category'] ?? false, function ($query, $category) {
        //     $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });

        // $query->when(
        //     $filters['category'] ?? false,
        //     fn ($query, $category) =>
        //     $query
        //         ->whereExists(
        //             fn ($query) =>
        //             $query->from('categories')
        //                 ->whereColumn('categories.id', 'posts.category_id')
        //                 ->where('categories.slug', $category)
        //         )
        // );

        // $query->when($filters['category'] ?? false, fn ($query, $category) =>
        //     $query 
        //         ->where('title', 'like', '%' . $category . '%')
        //         ->orWhere('body', 'like', '%' . $category . '%'));
    }
}

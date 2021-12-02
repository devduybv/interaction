<?php

namespace VCComponent\Laravel\Interaction\Entities;

use App\Entities\Category;
use App\Entities\Comment;
use App\Entities\Post;
use App\Entities\Product;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [
        'resource_type',
        'resource_id',
        'user_id',
        'status',
    ];
    public function resource($resource)
    {
        switch ($resource) {
            case 'posts':
                return $this->belongsTo(Post::class, 'resource_id');
            case 'products':
                return $this->belongsTo(Product::class, 'resource_id');
            case 'categories':
                return $this->belongsTo(Category::class, 'resource_id');
            case 'comments':
                return $this->belongsTo(Comment::class, 'resource_id');
        }
    }
}

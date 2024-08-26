<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['title', 'slug', 'description', 'title', 'images', 'user_manual'];

    public static function boot(): void
    {
        // Trước khi xóa 1 category sẽ xóa các category con
        parent::boot();
        static::deleting(function($product){
            $product->post()->delete;
            $product->components()->delete();
            $product->benefits()->delete();
            $product->indications()->delete();
        });
    }

    public function components(): HasMany
    {
        return $this->hasMany(Component::class, 'product_id', 'id');
    }

    public function benefits(): HasMany
    {
        return $this->hasMany(Benefit::class, 'product_id', 'id');
    }
    public function indications(): HasMany
    {
        return $this->hasMany(Indication::class, 'product_id', 'id');
    }
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
